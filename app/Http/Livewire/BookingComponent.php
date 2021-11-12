<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use App\Notifications\BookingRequest;
use App\Models\Booking;
use App\Models\User;
use Barryvdh\DomPDF\Facade as PDF;


use Livewire\Component;

class BookingComponent extends Component
{

    public $ids;
    public $name;
    public $email;
    public $address;
    public $fields_name;
    public $start_date;
    public $end_date;
    public $description;
    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'address' => 'required|min:3',
        'fields_name' => 'required',
        'start_date' => 'required',
        'end_date' => 'required',
        'description' => 'required',
    ];

    public function submit()
    {
        $booking = $this->validate();
        Booking::create($booking);
        $booking = Booking::latest()->first();

        $users = User::where('id','1')->get();
        Notification::send($users, new BookingRequest($booking));    
        session()->flash('success','submitted successfull');
       
        
    }

    public function download($id)
    {
     
        $data = Booking::where('id',$id)->get();
        dd($data);
     
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
