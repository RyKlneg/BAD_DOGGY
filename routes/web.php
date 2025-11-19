<?php

use App\Models\Order;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

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

Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');

// Ruta para ver pedidos (panel de administración)
Route::get('/admin/orders', [OrderController::class, 'index'])->name('admin.orders');
