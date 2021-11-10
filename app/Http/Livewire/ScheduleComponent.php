<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ScheduleComponent extends Component
{
    public function render()
    {
        return view('livewire.schedule-component')->layout('layouts.master');
    }
}
