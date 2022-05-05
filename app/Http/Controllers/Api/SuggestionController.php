<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\Suggestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Tymon\JWTAuth\Facades\JWTAuth;

class SuggestionController extends Controller
{
    public function __construct()
    {
        $this->user = JWTAuth::parseToken()->authenticate();
    }


    public function createSuggestion(Request $request){
        $suggestion = new Suggestion();
        $suggestion->sujet= $request->sujet;
        $suggestion->detail = $request->detail;
        //$suggestion->parent_id= Auth::guard('parente')->user()->id;


        $suggestion->save();

        try {
            $user = [
                'name'=>"bonetek",
/*                'name' => Auth::guard('parente')->user()->nomPere . Auth::guard('parente')->user()->prenomPere,*/
                'sujet' => $request->sujet,
                'suggestion'=>$request->detail
            ];

            \Mail::to('raniachouaieb82@gmail.com')->send(new \App\Mail\Suggestion($user));

            return response()->json([
                "status"=>true,
                "message"=>"envoie avec succees"
            ]);

        }catch (\Exception $exception){
            return $exception;
        }


    }
}
