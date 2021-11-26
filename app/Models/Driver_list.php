<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver_list extends Model
{
    use HasFactory;
    protected $table = "driver_list";
    protected $fillable = ['name','title','number','image','information'];
}
