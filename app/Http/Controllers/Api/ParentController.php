<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Level;
use App\Models\Parente;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class ParentController extends Controller
{
    public function __construct(){
         $this->user = JWTAuth::parseToken()->authenticate();
    }


    public function profile( $id){
        //Auth::guard('api')->user()
        $parent = Parente::find($id);
        $class= Classroom::get();
        $niveau = Level::get();
        $enfant = Student::where('parent_id' ,$id )->get();

        return response()->json([
            "status"=>true,
            "data"=> $parent , $enfant
        ]);
    }
    public function complementInfo($id){
        $parent = Parente::find($id);
        $enfant = Student::where('parent_id' , $id)->get();

        return response()->json([
            "status"=>true,
            "data"=> $parent , $enfant
        ]);
    }

    public function updateImageParent(Request $request , $id){
        $parent = Parente::with('students')->find($id);
        if($request->hasfile('image_profile')){

            $path = uploadImage('parents',$request->file('image_profile'));
            if(File::exists($path))
            {
                File::delete($path);
            }
            $parent->image_profile= $path;
        }
        $parent->update();
        return response()->json([
            "status"=>true,

            "data"=> $path ,
        ]);    }

    public function updateImageEnfant(Request $request , $id){
        $enf = Student::find($id);
        if($request->hasfile('image')){

            $path = uploadImage('enfants',$request->file('image'));
            if(File::exists($path))
            {
                File::delete($path);
            }
            $enf->image= $path;
        }
        $enf->update();
        return response()->json([
            "status"=>true,
            "message"=>"success",
            "data"=> $path ,
        ]);
    }

    public function updateAll(Request $request, $id){
        $parent = Parente::with('students')->find($id);
        $parent->nomPere= $request->nomPere;
        $parent->prenomPere=$request->prenomPere;
        $parent->professionPere=$request->professionPere;
        $parent->telPere=$request->telPere;
        $parent->nomMere=$request->nomMere;
        $parent->prenomMere=$request->prenomMere;
        $parent->professionMere=$request->professionMere;
        $parent->telMere=$request->telMere;
        $parent->nbEnfants=$request->nbEnfants;
        $parent->adresse=$request->adresse;
        $parent->email=$request->email;
        $parent->update();

        return response()->json([
            "status"=>true,
            "message"=>"success",
            "data"=> $parent ,
        ]);
    }
    public function updateElev(Request $request, $id){
        $validator = Validator::make($request->all(), [

            "nomEleve"=>"required|string",
            "prenomEleve"=>"required|string",

        ]);
        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        $updateleve= Student::find($id);
        // dd($request);
        $updateleve->update([
            "nomEleve"=>$request->nomEleve,
            "prenomEleve"=>$request->prenomEleve,

        ]);
        return response()->json([
            "status"=>true,
            "message"=>"success",
            "data"=> $updateleve ,
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
