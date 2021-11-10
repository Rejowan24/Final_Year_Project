<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slot_Booking extends Model
{
    use HasFactory;

    protected $table = "slot_booking";
    protected $fillable =['name','email','stu_id','dept','address','start_date','end_date','description'];
}
