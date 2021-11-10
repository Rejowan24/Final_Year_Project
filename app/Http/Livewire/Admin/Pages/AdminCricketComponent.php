<?php

namespace App\Http\Livewire\Admin\Pages;

use Livewire\Component;
use App\Models\Booking;
use Livewire\WithPagination;

class AdminCricketComponent extends Component
{

    use WithPagination;

    public $ids;
    public $name;
    public $email;
    public $address;
    public $fields_name;
    public $booking_date;
    public $booking_days;
    public $booking_time;
    public $description;
 
    public function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->address = '';
        $this->fields_name = '';
        $this->booking_date = '';
        $this->booking_days = '';
        $this->booking_time = '';
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
        $this->booking_date = $booking->booking_date;
        $this->booking_days = $booking->booking_days;
        $this->booking_time = $booking->booking_time;
        $this->description = $booking->description;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'address' => 'required|min:3',
            'fields_name' => 'required',
            'booking_date' => 'required',
            'booking_days' => 'required',
            'booking_time' => 'required',
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
                'booking_date' => $this->booking_date,
                'booking_days' => $this->booking_days,
                'booking_time' => $this->booking_time,
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

    public function render()
    {
        $booking = Booking::all();
        return view('livewire.admin.pages.admin-cricket-component',['booking'=>$booking])->layout('layouts.master');
    }
}
