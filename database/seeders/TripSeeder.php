<?php

namespace Database\Seeders;

use App\Models\Trip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    public function run()
    {
       Trip::create([
           'type'=>'taxi',
           'driver_id'=>'1',
           'customer_id'=>'1',
           'start_loc'=>'ElManial',
           'end_loc'=>'Naser City',
           'start_trip'=>'2021-05-03 14:02:30',
           'end_trip'=>'2021-05-03 15:02:30',
           'time_trip'=>'01:20',
           'fee'=>'85',
           'finished'=>'1',
           'driver_feedback'=>'hgfdsajnhgfdsanbgvf',
           'customer_feedback'=>'hgbrfverdwshtygrfedjuhygt',
       ]);
        for($i=0;$i<3;$i++){
            Trip::create([
                'type'=>'driving',
                'driver_id'=>'1',
                'customer_id'=>'1',
                'start_loc'=>'ElManial',
                'end_loc'=>'Naser City',
            ]);
        }
    }
}
