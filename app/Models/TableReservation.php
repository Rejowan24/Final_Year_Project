<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableReservation extends Model
{
    use HasFactory;
    protected $table = "tablereservation";
    protected $fillable =['name','email','address','phone','date','fromtime','totime','person','place_name','description'];
}
