<?php

namespace App\Http\Livewire\Admin\Pages;

use Livewire\Component;
use App\Models\Driver_list;
use Livewire\WithFileUploads;

class AdminDriverlistComponent extends Component
{

    use WithFileUploads;
    
    public $ids;
    public $name;
    public $title;
    public $number;
    public $image;
    public $information;
 
    public function resetInputFields()
    {
        $this->name = '';
        $this->title = '';
        $this->number = '';
        $this->image = '';
        $this->information = '';
    }

    public function AddDriver()
    {
        $validateData = $this->validate([
            'name' => 'required',
            'title' => 'required',
            'number' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',
            'information' => 'required',
        ]);

        if(!empty($this->image))
        {
            $imageName = time() . '-' . $this->name . '.' . $this->image->extension();
            // $this->image->move(public_path('frontend/img/driver'), $imageName);
            $validateData['image'] = $this->image->storeAs('driver',$imageName);

        }

        Driver_list::create($validateData);
        session()->flash('message','New Driver Added Successfully');
        $this->resetInputFields();
        $this->emit('DriverAdded');
    }


    public function EditDriverList($id)
    {
        $driverlist = Driver_list::where('id',$id)->first();
        $this->ids = $driverlist->id;
        $this->name = $driverlist->name;
        $this->title = $driverlist->title;
        $this->number = $driverlist->number;
        $this->information = $driverlist->information;
    }

    public function UpdateDriverList()
    {
        $this->validate([
            'name' => 'required',
            'title' => 'required',
            'number' => 'required',
            'information' => 'required',
        ]);

        if($this->ids)
        {
            $driverlist = Driver_list::find($this->ids);
            $driverlist->update([
                'name' => $this->name,
                'title' => $this->title,
                'number' => $this->number,
                'information' => $this->information,
            ]);
            
           session()->flash('message','Driver updated Successfully');
           $this->resetInputFields();
           $this->emit('DriverUpdated');
        }
    }


    public function DeleteDriverList($id)
    {
        if($id)
        {
            Driver_list::where('id',$id)->delete();
            session()->flash('message', 'Driver has been deleted');
        }
    }

    public function render()
    {
        $driverlist = Driver_list::all();
        return view('livewire.admin.pages.admin-driverlist-component',['driverlist'=>$driverlist])->layout('layouts.admin_index');
    }
}
