<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactFormController;

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});

Route::post('contact', [contactFormController::class, 'submitForm']);
