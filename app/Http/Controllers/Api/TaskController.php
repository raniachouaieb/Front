<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Level;
use App\Models\Parente;
use App\Models\Student;
use App\Models\Travail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->user = JWTAuth::parseToken()->authenticate();
    }

    public function task()
    {

        $niveaux = Level::get();

        $classes = Classroom::get();
        $eleves = Student::with(['class'=> function($q){
            $q->with('level');

        }])->where('parent_id', Auth::guard('api')->user()->id)->where('class_id' ,'!=',null)->get();

        $countTotal=[];
        foreach ($eleves as $eleve) {
            $nbTravail = Travail::where('class_id', $eleve->class_id)->count();
            array_push($countTotal,$nbTravail);
        }
        //$nbTravail= Student::with('travails')->get();
        return response()->json([
            "status"=>true,
            "data"=> $eleves,$countTotal


        ]);
    }

    public function listTask($id){

        $travails=Travail::with('matieres')->where('class_id',$id)->get();
       // $nomMatiere= Travail::with('matieres')->get();

        return response()->json([
            "status"=>true,
            "data"=> $travails


        ]);    }
}
