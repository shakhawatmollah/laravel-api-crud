<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1/')->group(function () {
    Route::get('articles', [ArticleController::class, 'index']);
    Route::post('articles', [ArticleController::class, 'store']);
    Route::get('articles/{article}', [ArticleController::class, 'show']);
    Route::put('articles/{article}', [ArticleController::class, 'update']);
    Route::delete('articles/{article}', [ArticleController::class, 'destroy']);
});
