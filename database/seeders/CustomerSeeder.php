<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{

    public function run()
    {
        Customer::create([
            'name' => 'James',
            'email' =>  'james@gmail.com',
            'password' => Hash::make('123456aaa'),
            'phone'=>'01122334455',
            'country'=>'giza',
            'current_pay'=>'cash',
            'gender'=>'1',
        ]);
    }
}
