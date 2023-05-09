<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Driver;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Customer_Controller extends Controller
{
    public function request(){

            return view('customer.request');
    }
    public function request_done(Request $request){
        $data=$request->validate([
            'start_loc'=>'required',
            'end_loc'=>'required',
            'type'=>'required',
        ]);
        $data['customer_id']=Auth::guard('customer')->id();
        if($data['type']==1)$data['type']='taxi';
        else $data['type']='delivary';
        Trip::create($data);
        return redirect()->route('lists');
    }
    public function lists(){
        $data['driver']=Driver::select('id','name','phone','car_model','car_color','car_plat')->get();
            return view('customer.lists')->with($data);
    }
    public function trip($id){
        $data['id']=$id;
        return view('customer.trip')->with($data);
    }
    public function feedback(Request $request){
        $id_trip=Trip::latest()->select('id')->get();
        $id=0;
        foreach ($id_trip as $d){
            $id=$d->id;
        }
        $data=$request->validate([
            'customer_feedback'=>'required',
        ]);
        $data['driver_id']=$request->driver_id;
       Trip::where('id','=',$id)->update($data);
        return redirect(route('home'));
    }

    public function logout()
    {
        auth()->guard('customer')->logout();
        return redirect(route('home'));
    }
}
