<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome() {
        $projects= Project::orderBy('created_at', 'DESC')->take(4)->get();
        return view('welcome', compact('projects'));
    }
}
