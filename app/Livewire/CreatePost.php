<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CreatePost extends Component
{
    public $title;

    public function render()
    {
        return view('livewire.create-post')->with([
            'author' => Auth::user()->name,
        ])->layout('layouts.app');
    }
}
