<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\SuggestionRequest;
use App\Models\Suggestion;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    public function suggestion(){
        return view('front.suggestion.create');

    }

    public function createSuggestion(SuggestionRequest $request){
        $suggestion = new Suggestion();
        $suggestion->sujet= $request->sujet;
        $suggestion->detail = $request->detail;

        $suggestion->save();

        //Session::flash('statuscode', 'success');
        //return redirect('mainScreen')->with('status','la suggestion est envoyée avec succées');
        return response()->json($suggestion);
    }
}
