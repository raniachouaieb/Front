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

    public function getEmploibyStudent(Request $request,$classroom)
    {
        $timeStart = microtime(true);
        $outputs = array();
        try {

//            $validator = Validator::make($request->all(), [
//                'level_id' => 'required',
//                'classroom_id' => 'required',
//            ]);
//            if ($validator->fails()) {
//                return $validator->errors();
//            }
            $courses = Schedule::where('classroom_id', $classroom)->where('status',1)->get();
            $outputs = array();
            foreach ($courses as $course) {
                $result = [];
                $lundi = json_decode($course->monday, true);
                $result["lundi"] = $lundi;
                $mardi = json_decode($course->tuesday, true);
                $result["mardi"] = $mardi;
                $mercredi = json_decode($course->wednesday, true);
                $result["mercredi"] = $mercredi;
                $jeudi = json_decode($course->thursday, true);
                $result["jeudi"] = $jeudi;
                $vendredi = json_decode($course->friday, true);
                $result["vendredi"] = $vendredi;
                $samedi = json_decode($course->saturday, true);
                $result["samedi"] = $samedi;
                $result["name"] = $course->name;
                array_push($outputs, $result);
            }
            return $outputs;
        } catch (\Exception $e) {
            return $e;
        }

    }


}
