<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\AuthController;

// Protected route example
Route::middleware('auth:sanctum')->get('/check-auth', function (Request $request) {
    return response()->json([
        'status' => 'authenticated'
    ]);
});

// Public test route
Route::get('/public', function () {
    return response()->json([
        'status' => 'public endpoint'
    ]);
});

// ✅ Auth Routes
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
