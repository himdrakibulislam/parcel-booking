<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "bookings";
    protected $fillable = [
        'booking_id',
        'user_id',
        'rider_id',
        'status',
        'viewing_pin',
        'payment_type',
        'is_confirm',
        'sender_name',
        'sender_email',
        'sender_contact',
        'sender_location',
        'sender_address',
        'receiver_name',
        'receiver_email',
        'receiver_contact',
        'receiver_location',
        'receiver_address',
        'quantity',
        'special_package',
        'description',
        'date',
        'category_type',
        'weight_range',
        'price',
        'vehicle',
        'time_slot',
    ];

    public function category()
    {
        return $this->belongsTo(category::class, 'category_type', 'id');
    }
    public function weight()
    {
        return $this->belongsTo(weight::class, 'weight_range', 'id');
    }
    public function rider()
    {
        return $this->belongsTo(Rider::class, 'rider_id', 'id');
    }
    protected function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
