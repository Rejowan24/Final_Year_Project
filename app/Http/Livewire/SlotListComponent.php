<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Slot_Booking;

class SlotListComponent extends Component
{
    public function render()
    {

        $slotlist = Slot_Booking::all();
        return view('livewire.slot-list-component',compact('slotlist'))->layout('layouts.master');
    }
}
