<?php

use App\Http\Controllers\Api\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::name('article.')->group(function () {
    Route::get('/articles/{article:slug}/like', [ArticleController::class, 'like'])->name('like');
    Route::get('/articles/{article:slug}/show', [ArticleController::class, 'show'])->name('show');
    Route::post('/articles/{article:slug}/addcomment', [ArticleController::class, 'addcomment'])->name('addcomment');
});
