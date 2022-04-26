<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use App\Models\Convocation;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConvocationController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:parente','verified']);
    }

    public function convocation()
    {
        $eleves = Student::where([['parent_id', Auth::guard('parente')->user()->id],['class_id' ,'!=',null]])->get();
        $nbConvocation= Student::with('convocations')->get();

        return view('front.convocation', compact('eleves'));

    }

    public function listConvocation($id){

        $convocations = Convocation::where('student_id', $id )->get();
        return view('Front.listConvocation', compact('convocations'));
    }
}
