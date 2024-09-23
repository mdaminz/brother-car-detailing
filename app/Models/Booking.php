<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'price',
        'phone',
        'car_model',
        'license_plate',
        'booking_date',
        'time_slot',
        'user_id',
        'service_id',
        'payment_status',
        'complete_status',
    ];

    public function service()
    {
        return $this->hasOne('App\Models\Service', 'id', 'service_id');
    }
}
