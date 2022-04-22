<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ParentRequest;
use App\Models\Level;
use App\Models\Parente;
use App\Models\Student;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function getRegister(){
         $niveaux = Level::get();
        return view('auth.register', compact('niveaux'));
    }

    public function register(Request $request){

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

        return view('welcome')->with('status', ' You are now registred successfully! Please check your email to verification link!');




    }


}
