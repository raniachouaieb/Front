<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\SuggestionRequest;
use App\Models\Suggestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SuggestionController extends Controller
{
    public function suggestion(){
        return view('front.suggestion.create');

    }

    public function createSuggestion(Request $request){
        $suggestion = new Suggestion();
        $suggestion->sujet= $request->sujet;
        $suggestion->detail = $request->suggestion;
        $suggestion->parent_id= Auth::guard('parente')->user()->id;


        $suggestion->save();

        try {
            $user = [
                'name' => Auth::guard('parente')->user()->nomPere . Auth::guard('parente')->user()->prenomPere,
                'sujet' => $request->sujet,
                'suggestion'=>$request->suggestion
            ];

            \Mail::to('raniachouaieb82@gmail.com')->send(new \App\Mail\Suggestion($user));
            Session::flash('statuscode', 'success');
            return redirect()->route('mainScreen')->with('status', ' Votre suggestion est envoyée avec succées');

            dd("success");

        }catch (\Exception $exception){
            return $exception;
        }

        //Session::flash('statuscode', 'success');
        //return redirect('mainScreen')->with('status','la suggestion est envoyée avec succées');
        //return response()->json($suggestion);
    }
}
