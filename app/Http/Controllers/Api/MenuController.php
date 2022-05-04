<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Tymon\JWTAuth\Facades\JWTAuth;


class MenuController extends Controller
{
    public function __construct(){
        $this->user = JWTAuth::parseToken()->authenticate();
    }
    public function list(){
        $menu = Menu::get();
        return response()->json([
            "status"=> true,
            "menu"=>$menu
        ]);
    }

}
