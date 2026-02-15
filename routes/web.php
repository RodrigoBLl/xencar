<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaginasWebController;
use App\Http\Controllers\MobileAppController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Rutas de Servicios (Dinámicas via ServiceController)
// Route::get('/{slug}', [App\Http\Controllers\ServiceController::class, 'show'])->name('service.show');

Route::view('/success', 'pages.success')->name('success');

Route::view('/contacto', 'pages.contacto')->name('contact');
Route::post('/contacto', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

// Rutas Dinámicas (Categoría y Servicio)
Route::get('/{category}', [App\Http\Controllers\CategoryController::class, 'show'])->name('category.show');
Route::get('/{category}/{service}', [App\Http\Controllers\ServiceController::class, 'show'])->name('service.show');




