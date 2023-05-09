<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Driver extends Authenticatable
{
    use HasFactory;
    protected $guarded=['id'];

    protected $fillable = [
        'name',
        'email',
        'password',
        'car_model',
        'car_color',
        'car_plat',
        'phone',
        'gender',
    ];

}
