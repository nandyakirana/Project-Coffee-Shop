<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/enter-phone', function () {
    return view('enter-phone');
});

Route::post('/register-phone', function () {
    // Logic untuk submit nomor telepon
    return back()->with('message', 'Verification code has been sent!');
})->name('register.phone.submit');

Route::get('/verify', function () {
    return view('verify');
});

Route::post('/verify-code', function () {
    // Logic untuk verifikasi kode
    return back()->with('message', 'Verification successful!');
})->name('verify.code.submit');

Route::get('/register', function () {
    return view('register');
});

Route::post('/register-submit', function () {
    // Logika untuk proses registrasi
    return back()->with('message', 'Registration successful!');
})->name('register.submit');

Route::get('/login', function () {
    return view('login');
});

Route::post('/login-submit', function () {
    // Logika untuk proses login
    return back()->with('message', 'Login successful!');
})->name('login.submit');

Route::get('/about', function () {
    return view('about');
});


