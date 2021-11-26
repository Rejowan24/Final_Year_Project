<?php

namespace App\Http\Livewire;
// use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Auth;
use App\Models\Slot_Booking;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

use Livewire\Component;

class SlotBookingComponent extends Component
{

    public $ids;
    public $name;
    public $email;
    public $stu_id;
    public $dept;
    public $address;
    public $start_date;
    public $end_date;
    public $description;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'address' => 'required|min:3',
        'start_date' => 'required',
        'end_date' => 'required',
        'description' => 'required',
    ];

    public function submit()
    {
        $slot_booking = $this->validate();
      
        $start_date = Slot_Booking::oldest()->pluck('start_date')->first();
    
        $end_date = Slot_Booking::latest()->pluck('end_date')->first();
       
        $period = CarbonPeriod::create($start_date, $end_date);
        foreach ($period as $date) {
          // Insert Dates into listOfDates Array
          $listOfDates[] = $date->format('d-m-y');
           
        }

        $timestampst = strtotime($this->start_date);
        $timestampend = strtotime($this->end_date);

        $st_date = date('d-m-y',$timestampst);
        $end_date = date('d-m-y',$timestampend);

        $datefirst = collect($listOfDates)->contains($st_date);
        $datelast = collect($listOfDates)->contains($end_date);

          

        if($datefirst == true || $datelast == true){
            session()->flash('success','No slot available');
        }else{
           session()->flash('success','Slot booking success');
           Slot_Booking::create($slot_booking);
        }
       
        


      
    
    }

    public function check(){

        // $slot_formate = Slot_Booking::wheredate('date', $date)->get();
        // $slot_time = Slot_Booking::latest()->pluck('slot_time')->first();
        // $stringadd = $slot_time.' '.$slot_formate;
        // $arrayvalues = array_count_values($slot_time);
        
     
     
      
        // $datecreate = date_create($date);
        // $adddate = date_add( $datecreate, date_interval_create_from_date_string($stringadd));
        // $dateformate = date_format($adddate, 'd-m-y');
    //    dd($slot_formate);


 




    
    }


    public function render()
    {
        // if(Route::has('login')){
        //     if(Auth::user()){
        //         return view('livewire.slot-booking-component')->layout('layouts.master');
        //     }

        //     return view('auth.login')->layout('layouts.master');

        // }

        return view('livewire.slot-booking-component')->layout('layouts.master');
    }
}
