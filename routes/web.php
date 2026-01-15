<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaginasWebController;
use App\Http\Controllers\MobileAppController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/paginas-web', [PaginasWebController::class, 'index'])->name('paginas-web');
Route::get('/mobile-apps', [MobileAppController::class, 'index'])->name('mobile-apps');




