<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = "bookings";
    protected $fillable = ['user_id','name','email','phone','fields_name','start_date','end_date','rpname','rpemail','description'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
