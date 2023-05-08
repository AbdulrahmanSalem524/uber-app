<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use HasFactory;
    protected $guarded=['id'];

    protected $fillable = [
        'name',
        'email',
        'password',
        'country',
        'current_pay',
        'phone',
        'gender',
    ];

    protected $hidden = [
        'password',
    ];
}
