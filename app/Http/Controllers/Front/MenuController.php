<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function list(){
        $menu = Menu::get();
        return view('front.menuds', compact('menu'));
    }
}
