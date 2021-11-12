<?php

namespace App\Http\Livewire\Admin\Pages;

use Livewire\Component;
use App\Models\Booking;
use App\Models\User;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Notification;
use App\Notifications\AdminReply;

class AdminCricketComponent extends Component
{

    use WithPagination;

    public $ids;
    public $name;
    public $email;
    public $address;
    public $fields_name;
    public $start_date;
    public $end_date;
    public $description;
 
    public function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->address = '';
        $this->fields_name = '';
        $this->start_date = '';
        $this->end_date = '';
        $this->description = '';
    }

    public function edit($id)
    {
        $booking = Booking::where('id',$id)->first();
        $this->ids = $booking->id;
        $this->name = $booking->name;
        $this->email = $booking->email;
        $this->address = $booking->address;
        $this->fields_name = $booking->fields_name;
        $this->start_date = $booking->start_date;
        $this->end_date = $booking->end_date;
        $this->description = $booking->description;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'address' => 'required|min:3',
            'fields_name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'description' => 'required',
        ]);

        if($this->ids)
        {
            $booking = Booking::find($this->ids);
            $booking->update([
                'name' => $this->name,
                'email' => $this->email,
                'address' => $this->address,
                'fields_name' => $this->fields_name,
                'start_date' => $this->start_date,
                'end_date' => $this->end_date,
                'description' => $this->description,
            ]);
            
           session()->flash('message','Booking updated Successfully');
           $this->resetInputFields();
           $this->emit('bookingUpdated');
        }
    }

    public function delete($id)
    {
        if($id)
        {
            Booking::where('id',$id)->delete();
            session()->flash('message', 'Booking has been deleted');
        }
    }


    public function approved($id)
    {
        $booking = Booking::find($id);
        if($booking->is_approved == false)
        {
            $booking->is_approved = true;
            $booking->save();
            $booking->notify(new AdminReply($booking));
            session()->flash('success','Approved by admin');
        }else{
            session()->flash('success','Approved by admin');
        }
    }

    public function render()
    {
        $booking = Booking::latest()->get();
        return view('livewire.admin.pages.admin-cricket-component',['booking'=>$booking])->layout('layouts.master');
    }
}
