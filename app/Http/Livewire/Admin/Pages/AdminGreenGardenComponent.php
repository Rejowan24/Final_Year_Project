<?php

namespace App\Http\Livewire\Admin\Pages;

use Livewire\Component;
use App\Models\Green_Garden;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class AdminGreenGardenComponent extends Component
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

        Green_Garden::create($validateData);
        session()->flash('message','New Food Added Successfully');
        $this->resetInputFields();
        // $this->emit('DriverAdded');
    }

    public function Editfood($id)
    {
        $foodlist = Green_Garden::where('id',$id)->first();
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
            $foodlist = Green_Garden::find($this->ids);
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
            Green_Garden::where('id',$id)->delete();
            session()->flash('message', 'Food Items has been deleted');
        }
    }
    public function render()
    {
        $greengarden = Green_Garden::all();
        return view('livewire.admin.pages.admin-green-garden-component',['greengarden'=>$greengarden])->layout('layouts.admin_index');
    }
}
