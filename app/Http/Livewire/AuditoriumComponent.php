<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AuditoriumComponent extends Component
{
    public function render()
    {
        return view('livewire.auditorium-component')->layout('layouts.master');
    }
}
