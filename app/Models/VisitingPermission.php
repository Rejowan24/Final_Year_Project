<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitingPermission extends Model
{
    use HasFactory;
    protected $table = "visitingpermission";
    protected $fillable =['name','email','phone','address','date','time','description'];
}
