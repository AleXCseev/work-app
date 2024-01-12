<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/workers', [App\Http\Controllers\WorkerController::class, 'index']);

Route::get('/workers/show', [App\Http\Controllers\WorkerController::class, 'show']);

Route::get('/workers/create', [App\Http\Controllers\WorkerController::class, 'create']);

Route::get('/workers/update', [App\Http\Controllers\WorkerController::class, 'update']);

Route::get('/workers/delete', [App\Http\Controllers\WorkerController::class, 'delete']);