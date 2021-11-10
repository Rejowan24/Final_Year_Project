<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DriverlistComponent extends Component
{
    public function render()
    {
        return view('livewire.driverlist-component')->layout('layouts.master');
    }
}
