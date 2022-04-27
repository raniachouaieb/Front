<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\ClassroomInfo;
use App\Models\Info;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InfoController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:parente','verified']);
    }

    public function info()
    {
        $nbTravail="";
        $classes = Classroom::get();
        $eleves = Student::where([['parent_id', Auth::guard('parente')->user()->id],['class_id' ,'!=',null]])->get();
        //$nbTravail= Student::with('travails')->get();
        //dd($nbTravail);
        return view('front.noteInfo', compact('eleves', 'classes'));

    }
    public function listInfo($id){
        $idInf = [];
        $infos = ClassroomInfo::where('classroom_id',$id)->get();
        //return $infos->info_id;
        foreach ($infos as $info ){
            array_push($idInf, $info['info_id']) ; //id mta3 info min  classinfo

        }

        for ($idf=0; $idf<$idInf; $idf++ ){
            $listInfff= Info::where('id',$idf)->get();
        }


        return $listInfff;

        $listInfos = Info::where('id',$infos['info_id'])->get();
        return $listInfos;
        return view('front.listInfo',compact('listInfff'));
    }

}
