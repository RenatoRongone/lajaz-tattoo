<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome() {
        $projects= Project::all()->sortBy('created_at');
        return view('welcome', compact('projects'));
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
