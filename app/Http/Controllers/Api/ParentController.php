<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Level;
use App\Models\Parente;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class ParentController extends Controller
{
    public function __construct(){
         $this->user = JWTAuth::parseToken()->authenticate();
    }

    public function profile( $id){
        $parent = Parente::get();
        $class= Classroom::get();
        $niveau = Level::get();
        $enfant = Student::where('parent_id' ,  $this->user->find($id))->get();

        return response()->json([
            "status"=>true,
            "data"=> $parent , $enfant
        ]);
    }

    public function sendMessage(Request $request){
        //return ($request->bakkaya);
        try {
            $user = [
                'name' => "bonetek",
                'info' => 'Laravel & Python Devloper',
                'msg'=>$request->message
            ];

            \Mail::to('raniachouaieb82@gmail.com')->send(new \App\Mail\ContactUs($user));
           return response()->json([
               "status"=>true,
               "data"=> $user
           ]);



        }catch (JWTException $exception){
            return $exception;
        }

    }


}
