<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;


// basic get route
Route::get('/', function () {
    return view('home');
});

//parameters using route
Route::get('/profile/', function () {
    return view('profile');
});

// Grouped route
Route::prefix("/")->group(function () {
    Route::get('/contact', function () {
        return view('contact');
    });
    Route::get('/user', function () {
        return view('user.blade');
    });
});

// Post Route example
Route::post("/formSubmit", function(Request $request){
    $request->validate([
        'fullName' => 'required|min:3',
        'email' => 'required|min:3|max:300|email:rfc,dns',
    ]);
    $fullName = $request->input('fullName');
    $email = $request->input('email');

    return "Your fullName is $fullName and email is $email";
})->name("submit_form");

// route for all resource in the a controller class
Route::resource('posts', PostController::class); 