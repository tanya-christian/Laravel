<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class HotelBooking extends Model
{
    Use HasFactory;
    
    protected $fillable = [
        'name',
        'chechindate',
        'checkoutdate',
        'room',
    ];
}
