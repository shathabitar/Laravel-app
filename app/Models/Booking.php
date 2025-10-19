<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['user_id', 'availability_id', 'payment_id', 'date', 'status'];
    /** @use HasFactory<\Database\Factories\BookingFactory> */
    use HasFactory;
}
