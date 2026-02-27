<?php

use App\Services\AuthorizationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorizationController;

// Простой тестовый маршрут
Route::get('/', function () {
    return response()->json([
        'status' => 'success',
        'message' => 'API is working'
    ]);
});

Route::post('/login', [AuthorizationController::class, 'login']);