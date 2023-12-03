<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rider extends Model
{
    use HasFactory;
    protected $table = "riders";
    protected $fillable = [
        'name',
        'email',
        'phone',
        'duty_time',
        'time_range_to',
        'time_range_from',
    ];

}
