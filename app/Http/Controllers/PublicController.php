<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function artistpage(){
        return view('artistpage');
    }
    
    public function works(){
        return view('works');
    }

    public function loadproject(){
        return view('loadproject');
    }
}
