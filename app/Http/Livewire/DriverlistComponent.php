<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Driver_list;

class DriverlistComponent extends Component
{

    
    public function render()
    {
        $driverlist = Driver_list::all();
        return view('livewire.driverlist-component', compact('driverlist'))->layout('layouts.master');
    }
}
