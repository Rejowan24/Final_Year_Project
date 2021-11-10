<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FoodcourtComponent extends Component
{
    public function render()
    {
        return view('livewire.foodcourt-component')->layout('layouts.master');
    }
}
