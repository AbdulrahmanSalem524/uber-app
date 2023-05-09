<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\Home::class)->group(function () {
    Route::get('/index', 'index')->name('home');
    Route::get('/login', 'login')->name('login');
    Route::post('/login-done',  'login_done')->name('login-done');
    Route::get('/register', 'register')->name('register');
    Route::post('/register-done',  'register_done')->name('register-done');
});

Route::controller(\App\Http\Controllers\Customer_Controller::class)->group(function () {
Route::middleware('customerAuth:customer')->group(function () {

Route::get('/request',  'request')->name('request');
Route::post('/request-done',  'request_done')->name('request-done');
Route::get('/lists',  'lists')->name('lists');
    Route::get('/trip-{id}',  'trip')->name('trip');
    Route::post('/feedback',  'feedback')->name('feedback');
});
});

Route::controller(\App\Http\Controllers\Driver_Controller::class)->group(function () {
    Route::middleware('driverAuth:driver')->group(function () {

        Route::get('/list-requests',  'lists')->name('list-req');
    });
});
