<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TableReservation;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

class TableReserveComponent extends Component
{
    public $name;
    public $email;
    public $address;
    public $phone;
    public $date;
    public $fromtime;
    public $totime;
    public $person;
    public $place_name;
    public $description;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'address' => 'required',
        'phone' => 'required|numeric',
        'person' => 'required',
        'date' => 'required',
        'fromtime' => 'required',
        'totime' => 'required',
        'place_name' => 'required',
        'description' => 'required',
    ];

    public function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->address = '';
        $this->phone = '';
        $this->person = '';
        $this->date = '';
        $this->fromtime = '';
        $this->totime = '';
        $this->place_name = '';
        $this->description = '';
    }

    public function submit()
    {
        $this->validate();
        TableReservation::create([
            'name' => $this->name,
            'email' => $this->email,
            'address' => $this->address,
            'phone' => $this->phone,
            'person' => $this->person,
            'date' => $this->date,
            'fromtime' => $this->fromtime,
            'totime' => $this->totime,
            'place_name' => $this->place_name,
            'description' => $this->description,
        ]);
        session()->flash('success','The Table has been reserved!');
        $this->resetInputFields();
    }
    
    public function render()
    {
        if(Route::has('login')){
            if(Auth::user()){
                return view('livewire.table-reserve-component')->layout('layouts.master');
            }

            return view('auth.login')->layout('layouts.master');

        }
        return view('livewire.table-reserve-component')->layout('layouts.master');
    }
}
