<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Level;
use App\Models\Matiere;
use App\Models\Module;
use App\Models\Observation;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EvaluationController extends Controller
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

    public function enfantObs()
    {

        $niveaux = Level::get();
        //$classes = Student::with('class')->get();

        $classes = Classroom::get();
        $eleves = Student::where([['parent_id', Auth::guard('parente')->user()->id],['class_id' ,'!=',null]])->get();
        return view('front.enfantObs', compact('eleves', 'niveaux', 'classes'));

    }
    public function evaluation($id, $idniveau){


        $module = Module::where('niveau_id', $idniveau)->get();
//dd($module);
        $matiere= Matiere::get();
        $observations = Observation::get('obs');
        $maxobs=max($observations->toArray());
//        $evaluations=Observation::where('student_id',$id)->where('obs', $maxobs)->get();
        $evaluations=Observation::where('student_id',$id)->get();

        //dd($evaluations);
        return view('front.evaluation',compact('module','evaluations','matiere'));
    }
}
