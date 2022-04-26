<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ParentRequest;
use App\Models\Level;
use App\Models\Parente;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function getRegister(){
        $niveaux = Level::get();
        return view('front.register', compact('niveaux'));
    }

    public function register(ParentRequest $request){

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

        $students = Student::create([
            "nomEleve"=>$request->nomEleve,
            "prenomEleve"=>$request->prenomEleve,
            "niveau"=>$request->niveau,
            "birth"=>$request->birth,
            "gender"=>($request->gender =='garcon')? 0:1,
            "parent_id"=>$parent->id,

        ]);
        Session::flash('statuscode', 'status');

        return view('front.home')->with('status', ' You are now registred successfully! Please check your email to verification link!');




    }

}
