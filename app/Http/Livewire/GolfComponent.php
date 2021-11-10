<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GolfComponent extends Component
{
    public function render()
    {
        return view('livewire.golf-component')->layout('layouts.master');
    }
}
