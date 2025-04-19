<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/joinus', function () {
    return view('career');
})->name('joinus');
