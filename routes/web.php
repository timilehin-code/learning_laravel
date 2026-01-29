<?php

use Illuminate\Support\Facades\Route;


// basic get route
Route::get('/', function () {
    return view('home');
});

//parameters using route
Route::get('/profile/', function () {
    return view('profile');
});

// Named Routes
Route::get('/test', function () {
    return "This is a test";
})->name("testpage");

// Grouped route
Route::prefix("profile")->group(function () {
    Route::get('/company', function () {
        return view('company');
    });
    Route::get('/user', function () {
        return view('user.blade');
    });
});
