<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Green_Garden extends Model
{
    use HasFactory;
    protected $table = "greengarden";
    protected $fillable =['name','short_description','image','price'];
}
