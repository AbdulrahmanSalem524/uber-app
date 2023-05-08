<?php

namespace Database\Seeders;

use App\Models\Driver;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DriverSeeder extends Seeder
{

    public function run()
    {
        Driver::create([
            'name' => 'Dona',
            'email' =>  'dona@gmail.com',
            'password' => Hash::make('123456aaa'),
            'phone'=>'01122334455',
            'car_model'=>'BMW',
            'car_color'=>'gray',
            'car_plat'=>'122|ds',
            'gender'=>'0',
        ]);
    }
}
