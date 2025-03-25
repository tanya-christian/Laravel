<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PropertyListing extends Model
{
    use HasFactory;

    protected $fillable=[
        'address',
        'type',
        'price',
        'desc',
    ];
}
