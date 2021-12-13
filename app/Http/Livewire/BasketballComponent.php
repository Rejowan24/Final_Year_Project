<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BasketballComponent extends Component
{
    public function render()
    {
        return view('livewire.basketball-component')->layout('layouts.master');
    }
}
