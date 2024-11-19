<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\TableController;

// Rutas para el Panel Administrativo
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

// Rutas para los Platos (Dishes)
Route::resource('dishes', DishController::class);

// Rutas para el Menú (Menu)
Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');

// Rutas para las Notificaciones
Route::resource('notifications', NotificationController::class);

// Rutas para las Órdenes (Orders)
Route::resource('orders', OrderController::class);
Route::post('orders/{id}/status/{status}', [OrderController::class, 'updateStatus'])->name('orders.updateStatus');

// Rutas para los Pagos (Payments)
Route::resource('payments', PaymentController::class);

// Rutas para las Secciones (Sections)
Route::resource('sections', SectionController::class);

// Rutas para las Mesas (Tables)
Route::resource('tables', TableController::class);
