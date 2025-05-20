<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

// Route::get('/')->name('productos.index');
Route::get('/',[ProductoController::class,'index'])->name('productos.index');