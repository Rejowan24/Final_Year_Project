<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Green_Garden;

class GreengardenComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $greengarden = Green_Garden::paginate(8);
        return view('livewire.greengarden-component',['greengarden'=>$greengarden])->layout('layouts.master');
    }
}
