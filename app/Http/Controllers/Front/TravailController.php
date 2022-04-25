<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Level;
use App\Models\Student;
use App\Models\Travail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TravailController extends Controller
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

    public function task()
    {
        $nbTravail="";
        $niveaux = Level::get();
        $classes = Classroom::get();
        $eleves = Student::where([['parent_id', Auth::guard('parente')->user()->id],['class_id' ,'!=',null]])->get();
        $nbTravail= Student::with('travails')->get();
        //dd($nbTravail);
        return view('front.taskToDo', compact('eleves', 'niveaux', 'classes','nbTravail'));

    }
    public function listTask($id){

        $travails=Travail::where('class_id',$id)->get();
        return view('front.listTask',compact('travails'));
    }
}
