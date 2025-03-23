<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');  
});

Route::get('/home', function () {
    return view('layout.home');  
});
Route::get('/zz', function () {
    return view('auth.zz');  
});
