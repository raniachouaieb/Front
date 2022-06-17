<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Convocation;
use App\Models\Level;
use App\Models\Parente;
use App\Models\Schedule;
use App\Models\Student;
use App\Models\Travail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class EmploiController extends Controller
{
    public function __construct()
    {
        $this->user = JWTAuth::parseToken()->authenticate();
    }

    public function getEnfant()
    {
        $niveaux = Level::get();

        $classes = Classroom::get();
        $eleves = Student::with(['class'=> function($q){
            $q->with('level');

        }])->where([['parent_id', Auth::guard('api')->user()->id],['class_id' ,'!=',null]])->get();
        return response()->json([
            "status"=>true,
            "data"=> $eleves


        ]);
    }

    public function getEmploibyStudent($id)
    {
        $emplois = Schedule::where('classroom_id', $id)->where('status', 1)->get();
            if($emplois){
                $output = [];
                $output[0] = isset($emp->monday) ? count(json_decode($emp->monday, true)) : 0;
                $output[1] = isset($emp->tuesday) ? count(json_decode($emp->tuesday, true)) : 0;
                $output[2] = isset($emp->wednesday) ? count(json_decode($emp->wednesday, true)) : 0;
                $output[3] = isset($emp->thursday) ? count(json_decode($emp->thursday, true)) : 0;
                $output[4] = isset($emp->friday) ? count(json_decode($emp->friday, true)) : 0;
                $output[5] = isset($emp->saturday) ? count((array)json_decode($emp->saturday, true)) : 0;
                $status = Schedule::doGetListStatus();
                $size = $output;
                return response()->json([
                    "status"=>true,
                    "data"=> $emplois,$status,$size


                ]);
            }  else{
                return response()->json([
                    "status"=>false,
                    "message"=>"aucun emploi effectué pour cet classe",
                    "data"=> $emplois


                ]);
            }




    }
}
