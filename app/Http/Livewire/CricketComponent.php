<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CricketComponent extends Component
{
    public function render()
    {
        return view('livewire.cricket-component')->layout('layouts.master');
    }
}
