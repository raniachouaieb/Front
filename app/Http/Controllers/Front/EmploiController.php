<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Level;
use App\Models\Schedule;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmploiController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth:parente','verified']);
    }

    public function getEnfant()
    {
        $niveaux = Level::get();

        $classes = Classroom::get();
        $eleves = Student::where([['parent_id', Auth::guard('parente')->user()->id],['class_id' ,'!=',null]])->get();
        //$nbTravail= Student::with('travails')->get();
        return view('front.emploi', compact('eleves', 'niveaux', 'classes'));

    }
    public function getEmploibyStudent($id)
    {
        $emplois = Schedule::where('classroom_id', $id)->where('status', 1)->get();

                $output = [];
            $output[0] = isset($emp->monday) ? count(json_decode($emp->monday, true)) : 0;
            $output[1] = isset($emp->tuesday) ? count(json_decode($emp->tuesday, true)) : 0;
            $output[2] = isset($emp->wednesday) ? count(json_decode($emp->wednesday, true)) : 0;
            $output[3] = isset($emp->thursday) ? count(json_decode($emp->thursday, true)) : 0;
            $output[4] = isset($emp->friday) ? count(json_decode($emp->friday, true)) : 0;
            $output[5] = isset($emp->saturday) ? count((array)json_decode($emp->saturday, true)) : 0;
            $status = Schedule::doGetListStatus();
            $size = $output;
            return view('front.emploibystudent', compact('status', 'emplois', 'size'));



    }

}
