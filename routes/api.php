<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('user', [\App\Http\Controllers\AuthController::class, 'loggedInUser']);
    Route::post('mult',[\App\Http\Controllers\MatrixmultiplierController::class,'mult'])->name('mult');
});
