<?php

use App\Http\Controllers\NinjaController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route :: get('/ninjas', [NinjaController::class, 'index']);

Route::get('/ninjas/create', [NinjaController::class, 'create']);

Route :: get('/ninjas/{id}', [NinjaController::class, 'show']);

Route::post('/import', [BookingController::class, 'import'])->name('import');

