<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use App\Notifications\BookingRequest;
use App\Models\Booking;
use App\Models\User;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Livewire\Component;

class BookingComponent extends Component
{

    public $ids;
    public $phone;
    public $fields_name;
    public $start_date;
    public $end_date;
    public $rpname;
    public $rpemail;
    public $description;
    protected $rules = [
        'phone' => 'required|numeric',
        'fields_name' => 'required',
        'start_date' => 'required',
        'end_date' => 'required',
        'description' => 'required',
    ];


    public function resetInputFields()
    {
        $this->phone = '';
        $this->fields_name = '';
        $this->start_date = '';
        $this->end_date = '';
        $this->rpname = '';
        $this->rpemail = '';
        $this->description = '';
    }

    public function submit()
    {
        $booking = new Booking();
        $booking->name = Auth::user()->name;
        $booking->email = Auth::user()->email;
        $booking->user_id = Auth::user()->id;
        $booking->phone = $this->phone;
        $booking->fields_name = $this->fields_name;
        $booking->start_date = $this->start_date;
        $booking->end_date = $this->end_date;
        $booking->rpname = $this->rpname;
        $booking->rpemail = $this->rpemail;
        $booking->description = $this->description;
        // $booking->save($this->validate());
    
        // session()->flash('success','submitted successfull');
        // $this->resetInputFields();
        // $booking = Booking::latest()->first();
        // $admin = User::where('id','1')->get();
        // Notification::send($admin, new BookingRequest($booking)); 

        $start_date = Booking::oldest()->pluck('start_date')->first();
        $end_date = Booking::latest()->pluck('end_date')->first();

        $period = CarbonPeriod::create($start_date, $end_date);
        foreach ($period as $date) {
          // Insert Dates into listOfDates Array
          $listOfDates[] = $date->format('d-m-y');
           
        }

        // convert the date on unix timestamps(user input date)
        $timestampst = strtotime($this->start_date);
        $timestampend = strtotime($this->end_date);
        // convert the unix timestamps to date
        $st_date = date('d-m-y',$timestampst);
        $end_date = date('d-m-y',$timestampend);

        // check the date on database
        $datefirst = collect($listOfDates)->contains($st_date);
        $datelast = collect($listOfDates)->contains($end_date);

          
        
        if($datefirst == true || $datelast == true){
            session()->flash('success','This Date is already Booked');
        }else{
   
            $booking->save($this->validate());
            $booking = Booking::latest()->first();
            $users = User::where('id','1')->get();
            Notification::send($users, new BookingRequest($booking)); 
            $this->resetInputFields();
            session()->flash('success','submitted successfull');
        }
        
    }


    public function check()
    {
        $this->emit('CheckBooking');
    }


    public function download($id)
    {
     
        $data = Booking::where('id',$id)->first();
        // dd($data);
     
     if($data->fields_name === 'Cricket & Football')
        {   
           
           $pdf = PDF::loadView('PDF.pdf',['booking'=>$data])->output();
           return response()->streamDownload(
            fn () => print($pdf),
            "Cricket_Football_fields.pdf"
       );

   
        }elseif($data->fields_name === 'Basket ball'){
           
            $pdf = PDF::loadView('PDF.pdf',['booking'=>$data])->output();
            return response()->streamDownload(
             fn () => print($pdf),
             "Basketball_fields.pdf"
        );

            
        }elseif($data->fields_name === 'Golf'){

           $pdf = PDF::loadView('PDF.pdf',['booking'=>$data])->output();
           return response()->streamDownload(
            fn () => print($pdf),
            "Golf.pdf"
           );
                
       
        }elseif($data->fields_name === 'Bonomaya'){
           $pdf = PDF::loadView('PDF.pdf',['booking'=>$data])->output();
           return response()->streamDownload(
            fn () => print($pdf),
            "Bonomaya.pdf"
       );

        }elseif($data->fields_name === 'Anisul Haq Study Center'){
           $pdf = PDF::loadView('PDF.pdf',['booking'=>$data])->output();
           return response()->streamDownload(
            fn () => print($pdf),
            "Anisul_Haq.pdf"
       );

        }elseif($data->fields_name === 'Auditorium'){
           $pdf = PDF::loadView('PDF.pdf',['booking'=>$data])->output();
           return response()->streamDownload(
            fn () => print($pdf),
            "Auditorium.pdf"
       );

        }else{
            return back()->with('Invalid');
        }
    }


    // public function testing()
    // {
    //     dd('this is me ... and i know what i am doing and what is my responsibility....');
    // }


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
