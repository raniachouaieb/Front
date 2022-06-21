<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Convocation;
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

class ConvocationController extends Controller
{
    public function __construct()
    {
        $this->user = JWTAuth::parseToken()->authenticate();
    }

    public function convocation()
    {


        $eleves = Student::with(['class'=> function($q){
            $q->with('level');

        }])->where('parent_id', Auth::guard('api')->user()->id)->where('class_id' ,'!=',null)->get();


        $countTotal=[];
        foreach ($eleves as $eleve) {

            $nbConvocation = Travail::where('student_id', $eleve->id)->count();
            array_push($countTotal,$nbConvocation);

        }
        return response()->json([
            "status"=>true,
            "data"=> $eleves,
            "count"=>$countTotal


        ]);
    }

    public function listConvocation($id){

        $convocations = Convocation::where('student_id', $id )->get();
        return response()->json([
            "status"=>true,
            "data"=> $convocations


        ]);    }


}
