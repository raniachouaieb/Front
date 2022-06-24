<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\LoginRequestApi;
use App\Http\Requests\ParentRequest;
use App\Models\Parente;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController
{

    public function __construct(){
  //  $this->middleware('auth:api', ['except'=>['login', 'register']]);
    }

    public function login(LoginRequestApi  $request){
        //step 1
        $credentials = $request->only(['email', 'password']);
        try {
            if (auth()->guard('api')->attempt($credentials)){
                //token
                $user = Auth::guard('api')->user();
                $user->device_token=$request->device_token;
                $id = $user->id;
                $user->update();
                $token = null;

                if (!$token = auth()->guard('api')->attempt($credentials)){
                    return response()->json([
                        "status"=>false,
                        "message"=>"email ou mot de passe incorrect"
                    ]);
                }

                return response()->json([
                    "status"=>true,
                    "token"=>$token,
                    "user"=>$id
                ]);
            }
        }catch(\Exception $ex){
            return ($ex);
        }


    }

    public function register(Request $request){
        $validator = Validator::make($request->all(), [

            "nomPere"=>"required|string",
            "prenomPere"=>"required|string",
            "email"=>"required|email|unique:parentes,email"

        ]);
        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        try{
            $parent = Parente::create([
                "nomPere"=>$request->nomPere,
                "prenomPere"=>$request->prenomPere,
                "professionPere"=>$request->professionPere,
                "telPere"=>$request->telPere,
                "nomMere"=>$request->nomMere,
                "prenomMere"=>$request->prenomMere,
                "professionMere"=>$request->professionMere,
                "telMere"=>$request->telMere,
                "nbEnfants"=>$request->nbEnfants,
                "adresse"=>$request->adresse,
                "email"=>$request->email,
                'password' => Hash::make($request->password),


            ]);
            $parent->sendEmailVerificationNotification();

            $student = Student::create([
                "nomEleve"=>$request->nomEleve,
                "prenomEleve"=>$request->prenomEleve,
                "niveau"=>$request->niveau,
                "gender"=>($request->gender =='garcon')? 0:1,
                "birth"=>$request->birth,
                "parent_id"=>$parent->id,
            ]);
            return response()->json(['message'=> 'success', 'user' => $parent,$student]);
        }catch(JWTException $exception){
            return response()->json([
                "status"=>false,
                "message"=>$exception->getMessage()
            ]);
        }



    }

    public function logout(Request $req){
        $this->validate($req, [
            "token"=> "required"
        ]);
        try{
            auth()->guard('api')->invalidate($req->token);
            return response()->json([
                "status"=>true,
                "message"=>"logout successfully"
            ]);

        }catch(JWTException $ex){
            return response()->json([
                "status"=>false,
                "message"=>"user can not be logges out"
            ]);
        }

    }
}
