<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('login', 'login');
Route::view('dashboard', 'dashboard');  
Route::view('register', 'register');

Route::post('login', function(){
    $credentials = request()->only('email', 'password');

    if(Auth::attempt($credentials)){
        return 'You are logged in!';
    }   
        return 'Login failed';
    
    
});