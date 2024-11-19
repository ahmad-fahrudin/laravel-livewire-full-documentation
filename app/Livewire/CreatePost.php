<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CreatePost extends Component
{
    public $title = 'Post title...';

    public function render()
    {
        return view('livewire.create-post')->layout('layouts.app');
    }
}
