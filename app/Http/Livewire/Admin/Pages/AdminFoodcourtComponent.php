<?php

namespace App\Http\Livewire\Admin\Pages;

use Livewire\Component;
use App\Models\Foodcourt;
use App\Models\TableReservation;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class AdminFoodcourtComponent extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $ids;
    public $name;
    public $short_description;
    public $price;
    public $image;
 
    public function resetInputFields()
    {
        $this->name = '';
        $this->short_description = '';
        $this->price = '';
        $this->image = '';
    }

    public function Addfood()
    {
        $validateData = $this->validate([
            'name' => 'required',
            'short_description' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',
        ]);

        if(!empty($this->image))
        {
            $imageName = $this->name . '.' . $this->image->extension();
            // $this->image->move(public_path('frontend/img/driver'), $imageName);
            $validateData['image'] = $this->image->storeAs('foodcourt',$imageName);

        }

        Foodcourt::create($validateData);
        session()->flash('message','New Food Added Successfully');
        $this->resetInputFields();
        // $this->emit('DriverAdded');
    }

    public function Editfood($id)
    {
        $foodlist = Foodcourt::where('id',$id)->first();
        $this->ids = $foodlist->id;
        $this->name = $foodlist->name;
        $this->short_description = $foodlist->short_description;
        $this->price = $foodlist->price;
        // $this->image = $foodlist->image;
    }

    public function Updatefood()
    {
        // $this->validate([
        //     'name' => 'required',
        //     'short_decription' => 'required',
        //     'price' => 'required',
        //     // 'image' => 'required',
        // ]);

        if($this->ids)
        {
            $foodlist = Foodcourt::find($this->ids);
            $foodlist->update([
                'name' => $this->name,
                'short_description' => $this->short_description,
                'price' => $this->price,
                // 'image' => $this->image,
            ]);
            
           session()->flash('message','Food updated Successfully');
           $this->resetInputFields();
        //    $this->emit('DriverUpdated');
        }
    }


    public function Deletefood($id)
    {
        if($id)
        {
            Foodcourt::where('id',$id)->delete();
            session()->flash('message', 'Food Items has been deleted');
        }
    }

    // for table reservation
    public $tableid;
    public $reservename;
    public $email;
    public $address;
    public $phone;
    public $date;
    public $fromtime;
    public $totime;
    public $person;
    public $place_name;
    public $description;


    public function resetFields()
    {
        $this->reservename = '';
        $this->email = '';
        $this->address = '';
        $this->phone = '';
        $this->date = '';
        $this->fromtime = '';
        $this->totime = '';
        $this->person = '';
        $this->place_name = '';
        $this->description = '';
    }


    public function Edittable($id)
    {
        $reservelist = TableReservation::where('id',$id)->first();
        $this->tableid = $reservelist->id;
        $this->reservename = $reservelist->name;
        $this->email = $reservelist->email;
        $this->address = $reservelist->address;
        $this->phone = $reservelist->phone;
        $this->date = $reservelist->date;
        $this->fromtime = $reservelist->fromtime;
        $this->totime = $reservelist->totime;
        $this->person = $reservelist->person;
        $this->placename = $reservelist->place_name;
        $this->description = $reservelist->description;
    }


    public function updatereservation()
    {
        // $this->validate([
        //     'name' => 'required',
        //     'short_decription' => 'required',
        //     'price' => 'required',
        //     // 'image' => 'required',
        // ]);

        if($this->tableid)
        {
            $reservelist = TableReservation::find($this->tableid);
            $reservelist->update([
                'name' => $this->reservename,
                'email' => $this->address,
                'phone' => $this->phone,
                'date' => $this->date,
                'fromtime' => $this->fromtime,
                'totime' => $this->totime,
                'person' => $this->person,
                'place_name' => $this->placename,
                'description' => $this->description,
            ]);
            
           session()->flash('message','Table has been updated Successfull');
           $this->resetFields();
        //    $this->emit('DriverUpdated');
        }
    }


    public function Deletereserve($id)
    {
        if($id)
        {
            TableReservation::where('id',$id)->delete();
            session()->flash('message', 'Table data has been deleted');
        }
    }

    public function render()
    {
        $foodcourt = Foodcourt::paginate(10);
        $tables = TableReservation::all();
        return view('livewire.admin.pages.admin-foodcourt-component',['foodcourt'=>$foodcourt,'tables'=>$tables])->layout('layouts.admin_index');
    }
}
