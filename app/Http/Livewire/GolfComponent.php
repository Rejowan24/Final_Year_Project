<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ChatBox;

class GolfComponent extends Component
{
    public function render()
    {
        $message = ChatBox::all();
        return view('livewire.golf-component',['message'=>$message])->layout('layouts.master');
    }
}
