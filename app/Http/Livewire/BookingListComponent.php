<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use App\Models\Slot_Booking;
use App\Models\Booking;

class BookingListComponent extends Component
{

  protected $listeners = ['checkdate'];

    public function CheckBooking()
    {
        $start_date = Booking::oldest()->pluck('start_date')->first();
        $end_date = Booking::latest()->pluck('end_date')->first();

        $period = CarbonPeriod::create($start_date, $end_date);
        foreach ($period as $date) {
          // Insert Dates into listOfDates Array
          $Booked_date_list[] = $date->format('d-m-y');
           
        }


         // current month start and end date
        $month_first_date = Carbon::now()->startOfMonth()->toDateString();
        $month_last_date = Carbon::now()->endOfMonth()->toDateString();
       
        // get the full month date list
        $period = CarbonPeriod::create($month_first_date, $month_last_date);
        foreach ($period as $date) {
          // Insert Dates into listOfDates Array
          $current_month_date_list[] = $date->format('d-m-y');
           
        }

            // list the unbooked dates 

            $date_compare = array_diff($current_month_date_list, $Booked_date_list);
            return $date_compare;
    }



    public function render()
    {
        
       $info =  $this->CheckBooking();
        return view('livewire.booking-list-component',compact('info'))->layout('layouts.admin_index');
    }
}
