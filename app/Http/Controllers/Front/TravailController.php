<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
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


            $eleves = Student::where([['parent_id', Auth::guard('parente')->user()->id],['class_id' ,'!=',null]])->get();

            return view('front.taskToDo', compact('eleves'));

    }
    public function liste($id){

        $datas=Travail::where('class_id',$id)->orderBy('id','DESC')
            ->get();
        return view('travail/listee',compact('datas'));
    }
}
