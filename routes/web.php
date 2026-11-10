<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Vehiculos', [VehiculosController::class, 'index'])->name('vehiculos.index');