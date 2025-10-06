<?php

use Illuminate\Support\Facades\Route;

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