<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    protected $fillable = [
        'type',
        'driver_id',
        'customer_id',
        'start_loc',
        'end_loc',
        'start_trip',
        'end_trip',
        'time_trip',
        'fee',
        'finished',
        'driver_feedback',
        'customer_feedback',
    ];

    protected $hidden = [
        'password',
    ];
}
