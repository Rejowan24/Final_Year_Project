<?php

namespace App\Http\Livewire;

use Livewire\Component;

class VolleyballComponent extends Component
{
    public function render()
    {
        return view('livewire.volleyball-component')->layout('layouts.master');
    }
}
