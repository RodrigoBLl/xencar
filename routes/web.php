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

// Rutas de Blog
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');

// Ruta Dinámica para Servicios (Debe ir al final)
Route::get('/{slug}', [App\Http\Controllers\ServiceController::class, 'show'])->name('service.show');




