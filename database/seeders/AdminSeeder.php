<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{

    public function run()
    {
        Admin::create([
            'name' => 'Salem',
            'email' =>  'salem@gmail.com',
            'password' => Hash::make('123456aaa')
        ]);    }
}
