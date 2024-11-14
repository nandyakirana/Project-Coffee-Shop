<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/enter-phone', function () {
    return view('enter-phone');
});

Route::post('/register-phone', function () {
    return back()->with('message', 'Verification code has been sent!');
})->name('register.phone.submit');

Route::get('/verify', function () {
    return view('verify');
});

Route::post('/verify-code', function () {
    return back()->with('message', 'Verification successful!');
})->name('verify.code.submit');

Route::get('/register', function () {
    return view('register');
});

Route::post('/register-submit', function () {
    return back()->with('message', 'Registration successful!');
})->name('register.submit');

Route::get('/login', function () {
    return view('login');
});

Route::post('/login-submit', function () {
    return back()->with('message', 'Login successful!');
})->name('login.submit');




