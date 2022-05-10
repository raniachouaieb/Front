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
        $this->middleware(['auth:parente', 'verified']);
    }

    public function info()
    {
        $nbTravail = "";
        $classes = Classroom::get();
        $eleves = Student::where([['parent_id', Auth::guard('parente')->user()->id], ['class_id', '!=', null]])->get();

        $countTotal=[];
        foreach ($eleves as $eleve) {
            $nbTravail = ClassroomInfo::where('classroom_id', $eleve->class_id)->count();
            array_push($countTotal,$nbTravail);
        }


        return view('front.noteInfo', compact('eleves', 'classes','countTotal'));

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

        return view('front.listInfo', compact('listInf','id'));
    }

}
