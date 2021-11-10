<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;
use Barryvdh\DomPDF\Facade as PDF;


use Livewire\Component;

class BookingComponent extends Component
{

    public $ids;
    public $name;
    public $email;
    public $address;
    public $fields_name;
    public $booking_date;
    public $booking_days;
    public $booking_time;
    public $description;
    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'address' => 'required|min:3',
        'fields_name' => 'required',
        'booking_date' => 'required',
        'booking_days' => 'required',
        'booking_time' => 'required',
        'description' => 'required',
    ];

    public function submit()
    {
        $booking = $this->validate();
        Booking::create($booking);
        $booking = Booking::latest()->first();
        
       

        if($booking->fields_name === 'Cricket & Football')
        {   
           
           $pdf = PDF::loadView('PDF.pdf',['booking'=>$booking])->output();
           return response()->streamDownload(
            fn () => print($pdf),
            "Cricket_Football_fields.pdf"
       );

   
        }elseif($booking->fields_name === 'Basket ball'){
           
            $pdf = PDF::loadView('PDF.pdf',['booking'=>$booking])->output();
            return response()->streamDownload(
             fn () => print($pdf),
             "Basketball_fields.pdf"
        );

            
        }elseif($booking->fields_name === 'Golf'){

           $pdf = PDF::loadView('PDF.pdf',['booking'=>$booking])->output();
           return response()->streamDownload(
            fn () => print($pdf),
            "Golf.pdf"
           );
       
       
        }elseif($booking->fields_name === 'Bonomaya'){
           $pdf = PDF::loadView('PDF.pdf',['booking'=>$booking])->output();
           return response()->streamDownload(
            fn () => print($pdf),
            "Bonomaya.pdf"
       );

        }elseif($booking->fields_name === 'Anisul Haq Study Center'){
           $pdf = PDF::loadView('PDF.pdf',['booking'=>$booking])->output();
           return response()->streamDownload(
            fn () => print($pdf),
            "Anisul_Haq.pdf"
       );

        }elseif($booking->fields_name === 'Auditorium'){
           $pdf = PDF::loadView('PDF.pdf',['booking'=>$booking])->output();
           return response()->streamDownload(
            fn () => print($pdf),
            "Auditorium.pdf"
       );

        }else{
            return back()->with('Invalid');
        }
       
        ;
    }


    public function render()
    {
  

        if(Route::has('login')){
            if(Auth::user()){
                return view('livewire.booking-component')->layout('layouts.master');
            }

            return view('auth.login')->layout('layouts.master');

        }


    return view('livewire.booking-component')->layout('layouts.master');  
    }
}
