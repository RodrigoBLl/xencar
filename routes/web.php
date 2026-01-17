<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaginasWebController;
use App\Http\Controllers\MobileAppController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Rutas Estáticas de Servicios (Migración)
Route::view('/diseno-logo', 'pages.diseno-logo')->name('diseno-logo');
Route::view('/diseno-marca', 'pages.diseno-marca')->name('diseno-marca');
Route::view('/paginas-web', 'pages.paginas-web')->name('paginas-web');
Route::view('/software', 'pages.software')->name('software');
Route::view('/comercio-electronico', 'pages.comercio-electronico')->name('comercio-electronico');
Route::view('/aplicaciones-moviles', 'pages.aplicaciones-moviles')->name('aplicaciones-moviles');
Route::view('/publicidad', 'pages.publicidad')->name('publicidad');

Route::view('/software-personalizado', 'pages.software-personalizado')->name('software-personalizado');
Route::view('/multimedia', 'pages.multimedia')->name('multimedia');
Route::view('/consultoria', 'pages.consultoria')->name('consultoria');
Route::view('/success', 'pages.success')->name('success');

Route::view('/contacto', 'pages.contacto')->name('contact');




