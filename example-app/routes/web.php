<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProductController;

Route::resource('jobs', JobController::class);

Route::resource('jobs', JobController::class);
Route::resource('products', ProductController::class);


Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});



 
Route::post('/contact', function () {
    
    return back()->with('success', 'Thank you for contacting us!');
})->name('contact.submit');