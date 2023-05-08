<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Driver;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Home extends Controller
{
    public function index(){

        return view('index');
    }
    public function login(){

        return view('login');
    }
    public function login_done(Request $request){
        $data=$request->validate([
            'email' => 'required|email',
            'password'=>'required|string|min:8|max:12'
        ]);
        if(Auth::guard('customer')->attempt(['email'=>$request['email'],'password'=>$request['password']])){
            return redirect()->route('home')->with('success','تم تسجيل الدخول.');
        }
        return back()->withErrors([
            'message' => 'الايميل او الباس غلط ياليفه',
        ])->onlyInput('message');
    }
    public function register(){

        return view('register');
    }
    public function register_done(Request $request){
        $data=$request->validate([
            'name'=> 'required|string|max:30',
            'phone'=> 'required|max:11|min:11',
            'country'=>'required',
            'gender'=>'required',
            'current_pay'=>'required',
            'email' => 'required|email',
            'password'=>'required|string|min:8|max:12'
        ]);
        $data['password']=Hash::make($data['password']);
        Customer::create($data);
        return redirect()->route('home')->with('success','تم انشاء حساب بنجاح برجاء تسجيل الدخول.');
    }
    public function request(){
        if(!Auth::guard('customer')){
            return back()->withErrors([
                'message' => 'you should register first',
            ])->onlyInput('message');
        }
        else{
            return view('request');
        }
    }
    public function request_done(Request $request){
        $data=$request->validate([
            'start-loc'=>'required',
            'end-loc'=>'required',
            'type'=>'required',
        ]);
        $data['customer_id']=Auth::guard('customer')->id();
        Trip::create($data);
        return redirect()->route('lists');
    }
    public function lists(){
        $data['driver']=Driver::select('id','name','phone','car_model','car_color','car_plat')->get();
            return view('lists')->with($data);
    }
}
