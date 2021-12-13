<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Foodcourt;
use Livewire\WithPagination;

class FoodcourtComponent extends Component
{

    use WithPagination;
    public function render()
    {
        $foods = Foodcourt::paginate(6);
        return view('livewire.foodcourt-component',['foods'=>$foods])->layout('layouts.master');
    }
}
