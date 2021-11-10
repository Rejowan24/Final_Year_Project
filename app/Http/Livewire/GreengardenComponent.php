<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GreengardenComponent extends Component
{
    public function render()
    {
        return view('livewire.greengarden-component')->layout('layouts.master');
    }
}
