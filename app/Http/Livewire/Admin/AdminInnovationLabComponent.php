<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\VisitingPermission;

class AdminInnovationLabComponent extends Component
{


  
    public $ids;
    public $name;
    public $email;
    public $phone;
    public $address;
    public $date;
    public $time;
    public $description;
 
    public function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->address = '';
        $this->date = '';
        $this->time = '';
        $this->description = '';
    }

    // public function store()
    // {
    //     $validateData = $this->validate([
    //         'name' => 'required|min:3',
    //         'email' => 'required|email',
    //         'phone' => 'required',
    //         'address' => 'required',
    //         'date' => 'required',
    //         'time' => 'required',
    //         'description' => 'required',
    //     ]);

    //     VisitingPermission::create($validateData);
    //     session()->flash('message','Booking Added Successfully');
    //     $this->resetInputFields();
    //     $this->emit('bookingadded');
    // }

   
    public function editpermission($id)
    {
        $visitingpermission = VisitingPermission::where('id',$id)->first();
        $this->ids = $visitingpermission->id;
        $this->name = $visitingpermission->name;
        $this->email = $visitingpermission->email;
        $this->phone = $visitingpermission->phone;
        $this->address = $visitingpermission->address;
        $this->date = $visitingpermission->date;
        $this->time = $visitingpermission->time;
        $this->description = $visitingpermission->description;
        // $this->image = $foodlist->image;
    }

    public function updatepermission()
    {
        // $this->validate([
        //     'name' => 'required',
        //     'short_decription' => 'required',
        //     'price' => 'required',
        //     // 'image' => 'required',
        // ]);

        if($this->ids)
        {
            $visitingpermission = VisitingPermission::find($this->ids);
            $visitingpermission->update([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'address' => $this->address,
                'date' => $this->date,
                'time' => $this->time,
                'description' => $this->description,
                // 'image' => $this->image,
            ]);
            
           session()->flash('message','Permission updated Successfully');
           $this->resetInputFields();
        //    $this->emit('DriverUpdated');
        }
    }


    public function deletepermission($id)
    {
        if($id)
        {
            VisitingPermission::where('id',$id)->delete();
            session()->flash('message', 'permission has been deleted');
        }
    }


    public function render()
    {
        $permissiondata = VisitingPermission::all();
        return view('livewire.admin.admin-innovation-lab-component',['permissiondata'=>$permissiondata])->layout('layouts.admin_index');
    }
}
