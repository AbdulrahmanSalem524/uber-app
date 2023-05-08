<?php

use Illuminate\Support\Facades\Route;


Route::get('/index', [\App\Http\Controllers\Home::class, 'index'])->name('home');
Route::get('/login', [\App\Http\Controllers\Home::class, 'login'])->name('login');
Route::post('/login-done', [\App\Http\Controllers\Home::class, 'login_done'])->name('login-done');
Route::get('/register', [\App\Http\Controllers\Home::class, 'register'])->name('register');
Route::post('/register-done', [\App\Http\Controllers\Home::class, 'register_done'])->name('register-done');
Route::get('/request', [\App\Http\Controllers\Home::class, 'request'])->name('request');
Route::post('/request-done', [\App\Http\Controllers\Home::class, 'request_done'])->name('request-done');
Route::get('/lists', [\App\Http\Controllers\Home::class, 'lists'])->name('lists');


