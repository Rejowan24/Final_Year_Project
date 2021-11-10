<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BonomayaComponent extends Component
{
    public function render()
    {
        return view('livewire.bonomaya-component')->layout('layouts.master');
    }
}
