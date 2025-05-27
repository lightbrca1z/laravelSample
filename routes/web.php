<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

Route::get('/', function () {
    return view('index');
});

Route::post('/messages', [MessageController::class, 'store']);

Route::get('/messages', [MessageController::class, 'index']);
