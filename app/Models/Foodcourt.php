<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foodcourt extends Model
{
    use HasFactory;
    protected $table = "foodcourt";
    protected $fillable =['name','short_description','image','price'];
}
