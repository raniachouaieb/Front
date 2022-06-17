<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Level;
use App\Models\Parente;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use function view;
use Illuminate\Support\Facades\Auth;


class ParentController extends Controller
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

    public function logout(Request  $r) {


       $user_id= Auth::guard('parente')->user()->id;
    $r->session()->forget('$user_id');
       //Auth::guard('parente')->user()->logout();
//        Session::flush();
        Session::flash('statuscode', 'success');
        return redirect()->route('getLogin')->with('status', 'Logout successfully');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function mainScreen(){
        return view('front.mainScreen');
    }

    public function contact(){
        return view('front.contact');
    }
    public function saveToken(Request $request)
    {
        Auth::guard('parente')->user()->update(['web_token'=>$request->token]);
        return response()->json(['token saved successfully.']);
    }

    public function sendMessage(Request $request){
        //return ($request->bakkaya);
        try {
            $user = [
                'name' => Auth::guard('parente')->user()->nomPere,
                'info' => 'Laravel & Python Devloper',
                'msg'=>$request->message
            ];

            \Mail::to('raniachouaieb82@gmail.com')->send(new \App\Mail\ContactUs($user));
            Session::flash('statuscode', 'success');
            return redirect()->route('mainScreen')->with('status', ' Votre message est envoyée avec succées');



        }catch (\Exception $exception){
            return $exception;
        }

    }

    public function apropos(){
        return view('front.apropos');
    }
    public function profile(){
        $parent = Parente::get();
        $class= Classroom::get();
        $niveau = Level::get();
        $enfant = Student::where('parent_id' , auth::guard('parente')->user()->id)->get();

        return view('front.profile', compact('parent', 'enfant','class', 'niveau'));
    }

    public function ComplementInfo(){
        $parent = Parente::get();
        $enfant = Student::where('parent_id' , auth::guard('parente')->user()->id)->get();

        return view('front.complementInfo', compact('parent', 'enfant'));
    }
    public function updateImageParent(Request $request , $id){
        $parent = Parente::with('students')->find($id);
        if($request->hasfile('image_profile')){

            $path = uploadImage('parents',$request->file('image_profile'));
            if(File::exists($path))
            {
                File::delete($path);
            }
            $parent->image_profile= $path;
        }
        $parent->update();
        return redirect()->route('mainScreen')->with(['success'=>'modification avec succés']);
    }

    public function updateImageEnfant(Request $request , $id){
        $enf = Student::find($id);
        if($request->hasfile('image')){

            $path = uploadImage('enfants',$request->file('image'));
            if(File::exists($path))
            {
                File::delete($path);
            }
            $enf->image= $path;
        }
        $enf->update();
        return redirect()->route('mainScreen')->with(['success'=>'modification avec succés']);
    }


    public function list(){
        $class= Classroom::get();
        $niveau = Level::get();

        $enfant = Student::where('parent_id' , auth::guard('parente')->user()->id)->get();

        return view('front.enfants',compact('enfant', 'class','niveau'));


        }
        public function updateAll(Request $request, $id){
            $parent = Parente::with('students')->find($id);
            $parent->nomPere= $request->nomPere;
            $parent->prenomPere=$request->prenomPere;
            $parent->professionPere=$request->professionPere;
            $parent->telPere=$request->telPere;
            $parent->nomMere=$request->nomMere;
            $parent->prenomMere=$request->prenomMere;
            $parent->professionMere=$request->professionMere;
            $parent->telMere=$request->telMere;
            $parent->nbEnfants=$request->nbEnfants;
            $parent->adresse=$request->adresse;
            $parent->email=$request->email;
            $parent->update();

            return redirect()->route('mainScreen')->with(['success'=>'modification avec succés']);

        }

        public function updateElev(Request $request, $id){
            $updateleve= Student::find($id);
            // dd($request);
            $updateleve->update([
                "nomEleve"=>$request->nomEleve,
                "prenomEleve"=>$request->prenomEleve,

            ]);
            return redirect()->route('mainScreen')->with(['success'=>'modification avec succés']);

        }
}
