<?php

use App\Http\Controllers\Api\ArticleController as ApiArticleController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ArticleController::class, 'home'])->name('home');
Route::get('/articles', [ArticleController::class, 'articles'])->name('articles');
Route::get('/articles/{article:slug}.html', [ArticleController::class, 'article'])->name('article');

Route::post('/api/articles/{article:slug}/addcomment', [ApiArticleController::class, 'addcomment'])
    ->name('article.addcomment');
