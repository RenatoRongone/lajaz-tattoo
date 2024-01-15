<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CreateProject extends Component
{
    public $title;
    public $description;
    public $user_id;

    public function store(){
        $project= Project::create([
            'title'=> $this->title,
            'description'=> $this->description,
            'user_id'=> Auth::user()->id,
        ]);
        $this->reset();
    }


    public function render()
    {
        return view('livewire.create-project');
    }
}
