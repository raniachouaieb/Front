<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\ClassroomInfo;
use App\Models\Convocation;
use App\Models\Info;
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

class InfoController extends Controller
{
    public function __construct()
    {
        $this->user = JWTAuth::parseToken()->authenticate();
    }
    public function info()
    {
        $classes = Classroom::get();
        $eleves = Student::where([['parent_id', Auth::guard('api')->user()->id], ['class_id', '!=', null]])->get();

        $countTotal=[];
        foreach ($eleves as $eleve) {
            $nbTravail = ClassroomInfo::where('classroom_id', $eleve->class_id)->count();
            array_push($countTotal,$nbTravail);
        }


        return response()->json([
            "status"=>true,
            "data"=> $eleves,$countTotal


        ]);
    }

    public function listInfo($id)
    {
        $idInf = [];
        $infos = ClassroomInfo::where('classroom_id', $id)->get();
        // return $infos->count();
        foreach ($infos as $info) {
            $idInf[] = $info['info_id']; //id mta3 info min  classinfo

        }
        //  dd($idInf);
        $tab=[];
        $listInf=[];
        foreach ($idInf as $listInfo) {
            $listInformation = Info::where('id', $listInfo)->get();
            array_push($listInf,$listInformation);
        }

        return response()->json([
            "status"=>true,
            "data"=> $infos,$listInf


        ]);    }
}
