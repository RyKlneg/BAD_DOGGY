<?php

use App\Models\Order;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;

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
Route::prefix('admin')->group(function () {
    Route::get('/orders', [AdminOrderController::class, 'index'])->name('admin.orders.index');
    Route::get('/orders/{id}', [AdminOrderController::class, 'show'])->name('admin.orders.show');
    Route::put('/orders/{id}/status', [AdminOrderController::class, 'updateStatus'])->name('admin.orders.update-status');
});
