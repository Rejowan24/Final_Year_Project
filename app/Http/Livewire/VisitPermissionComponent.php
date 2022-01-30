<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\VisitingPermission;

class VisitPermissionComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $address;
    public $date;
    public $time;
    public $description;
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required|numeric',
        'address' => 'required',
        'date' => 'required',
        'time' => 'required',
        'description' => 'required',
    ];

    public function resetInputfields()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->address = '';
        $this->date = '';
        $this->time = '';
        $this->description = '';
    }

    public function apply()
    {
        $permission = new VisitingPermission();
        $permission->name = $this->name;
        $permission->email = $this->email;
        $permission->phone = $this->phone;
        $permission->address = $this->address;
        $permission->date = $this->date;
        $permission->time = $this->time;
        $permission->description = $this->description;
        $permission->save($this->validate());
        session()->flash('success','submitted successfull');
        $this->resetInputFields();
    }

    public function render()
    {
        return view('livewire.visit-permission-component')->layout('layouts.master');
    }
}
