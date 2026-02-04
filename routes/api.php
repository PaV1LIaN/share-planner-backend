<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Простой тестовый маршрут
Route::get('/', function () {
    return response()->json([
        'status' => 'success',
        'message' => 'API is working'
    ]);
});