<?php

namespace App\Http\Livewire\Admin\Pages;

use Livewire\Component;
use App\Models\Booking;
use App\Models\User;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Notification;
use App\Notifications\AdminReply;
use App\Notifications\AdminCancle;

class AdminCricketComponent extends Component
{

    use WithPagination;

    public $ids;
    public $name;
    public $email;
    public $phone;
    public $fields_name;
    public $start_date;
    public $end_date;
    public $description;
 
    public function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->start_date = '';
        $this->end_date = '';
        $this->description = '';
    }

    public function store()
    {
        $validateData = $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required',
            'fields_name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'description' => 'required',
        ]);

        Booking::create($validateData);
        session()->flash('message','Booking Added Successfully');
        $this->resetInputFields();
        $this->emit('bookingadded');
    }

    public function edit($id)
    {
        $booking = Booking::where('id',$id)->first();
        $this->ids = $booking->id;
        $this->name = $booking->name;
        $this->email = $booking->email;
        $this->phone = $booking->phone;
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
            'phone' => 'required',
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
                'phone' => $this->phone,
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
            $booking->is_approved = 'approved';
            $booking->status = 'approved';
            $booking->save();
            $booking->user->notify(new AdminReply($booking));
            session()->flash('success','Approved by admin');
        }else{
            session()->flash('success','Already Approved by admin');
        }
    }

    public function cancled($id)
    {
        $booking = Booking::find($id);
        if($booking->is_approved == false)
        {
            $booking->is_approved = "cancled";
            $booking->status = 'cancled';
            $booking->save();
            $booking->user->notify(new AdminCancle($booking));
            session()->flash('success','Cancle by admin');
        }else{
            session()->flash('success','Already Approved by admin');
        }
       
    }

    public function render()
    {
        $booking = Booking::latest()->paginate(2);
        return view('livewire.admin.pages.admin-cricket-component',['booking'=>$booking])->layout('layouts.admin_index');
    }
}
