<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//view order
Route::get('/order', function () {
    return view('order');
})->name('order');
