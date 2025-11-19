<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//view order
Route::get('/order', function () {
    return view('order');
})->name('order');

Route::get('/pruebas', function () {
    return view('pruebas');
})->name('pruebas');
