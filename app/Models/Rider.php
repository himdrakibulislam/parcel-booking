<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Rider extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "riders";
    protected $guard = "rider";
 
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'duty_time',
        'ip',
        'is_approved',
    ];
    protected $hidden = [
        'password',
    ];
}
