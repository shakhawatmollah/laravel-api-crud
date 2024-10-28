<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\AdminMiddleware;

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')
    ->middleware('auth:sanctum');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('auth:sanctum', AdminMiddleware::class)->group(function () {
    Route::get('/admin', function (Request $request) {
        return $request->user();
    });
});

Route::prefix('v1/')->middleware('auth:sanctum')->group(function () {
    Route::apiResource('articles', ArticleController::class, [
        'except' => ['index', 'show'],
    ]);
});

Route::get('/v1/articles', [ArticleController::class, 'index']);
Route::get('/v1/articles/{id}', [ArticleController::class, 'show']);
