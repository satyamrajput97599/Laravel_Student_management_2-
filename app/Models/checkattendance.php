<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checkattendance extends Model
{
    use HasFactory;
    public $table = "CheckAttendance";
    public $timestamps=false;
}
