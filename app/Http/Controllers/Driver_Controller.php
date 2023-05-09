<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Driver;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Driver_Controller extends Controller
{

    public function lists(){
        $data['driver']=Driver::select('id','name','phone','car_model','car_color','car_plat')->get();
        return view('driver.lists')->with($data);
    }

    public function logout()
    {
        auth()->guard('customer')->logout();
        return redirect(route('index'));
    }
}
