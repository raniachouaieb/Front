<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Bulletin;
use App\Models\Classroom;
use App\Models\Level;
use App\Models\Module;
use App\Models\Schedule;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BulletinController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth:parente', 'verified']);
    }

    public function enfBulltin()
    {

        $niveaux = Level::get();

        $classes = Classroom::get();
        $eleves = Student::where([['parent_id', Auth::guard('parente')->user()->id], ['class_id', '!=', null]])->get();
        //dd($nbTravail);
        return view('front.enfBulltin', compact('eleves', 'niveaux', 'classes'));

    }
    public function bulletin($id){

        $bulletin = Bulletin::where('student_id', $id)->get();

        return view('front.bulletin', compact('bulletin'));


    }
}
