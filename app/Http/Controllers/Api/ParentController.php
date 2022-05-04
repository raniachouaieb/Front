<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Level;
use App\Models\Parente;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class ParentController extends Controller
{
    public function __construct(){
         $this->user = JWTAuth::parseToken()->authenticate();
    }

    public function profile(Request $request){
        $parent = Parente::get();
        $class= Classroom::get();
        $niveau = Level::get();
        $enfant = Student::where('parent_id' , JWTAuth::authenticate($request->id))->get();

        return response()->json([
            "status"=>true,
            "data"=> $parent , $enfant
        ]);
    }

}
