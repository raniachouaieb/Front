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
        $datas=[];
             $niveaux = Level::get();
             $classes = Classroom::get();
            $eleves = Student::where([['parent_id', Auth::guard('parente')->user()->id],['class_id' ,'!=',null]])->get();
        foreach ($eleves as $el) {
            $data = Travail::where('class_id', $el->class_id)->count();
            //dd($data);
            array_push($datas,$data);
        }
            return view('front.taskToDo', compact('eleves', 'niveaux', 'classes','datas'));

    }
    public function listTask($id){

        $datas=Travail::where('class_id',$id)->orderBy('id','DESC')
            ->get();
        return view('front.listTask',compact('datas'));
    }
}
