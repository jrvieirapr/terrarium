<?php

use App\Http\Controllers\BichoController;
use App\Http\Controllers\TipoBichoController;
use App\Models\TipoBicho;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::resource('tiposbichos',TipoBichoController::class);
Route::resource('bichos',BichoController::class);



