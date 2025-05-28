<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

Route::get('/', function () {
    return view('index');
});

Route::get('/messages', [MessageController::class, 'index']);
Route::post('/messages', [MessageController::class, 'store']);
Route::delete('/messages', [MessageController::class, 'destroyAll']);
Route::delete('/messages/{id}', [MessageController::class, 'destroy']);
