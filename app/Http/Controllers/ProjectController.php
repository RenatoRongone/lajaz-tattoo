<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function artistpage(){
        return view('artistpage');
    }
    
    public function works(){
        $projects=Project::orderBy('created_at', 'desc')->paginate(4);
        return view('works', compact('projects'));
    }

    public function loadproject(){
        return view('loadproject');
    }
}
