<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatBox extends Model
{
    use HasFactory;
    protected $table = "chatbox";
    protected $fillable = ['message'];
}
