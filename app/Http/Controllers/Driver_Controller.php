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
        $data['trip']=Trip::select('id','start_loc','end_loc')->get();
        return view('driver.lists')->with($data);
    }
    public function trip($id){
        $data['id']=$id;
        return view('driver.trip')->with($data);
    }
    public function feedback(Request $request){
        $data=$request->validate([
            'driver_feedback'=>'required',
        ]);
        $data['finished']=1;
        $id=$request->trip_id;
        Trip::where('id','=',$id)->update($data);
        return redirect(route('home'));
    }
    public function logout()
    {
        auth()->guard('driver')->logout();
        return redirect(route('index'));
    }
}
