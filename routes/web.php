<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/workers', [\App\Http\Controllers\WorkerController::class, 'index']);