<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = "bookings";
    protected $fillable = ['user_id','name','email','address','fields_name','start_date','end_date','description'];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
