<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RouteComponent extends Component
{
    public function render()
    {
        return view('livewire.route-component')->layout('layouts.master');
    }
}
