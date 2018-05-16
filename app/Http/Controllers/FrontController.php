<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function frontIndex(){
        return view('front.pages.home');
    }
}
