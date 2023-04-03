<?php

use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\IndexController;
use App\Http\Controllers\Api\Translation\ArticleTranslationController;
use App\Http\Controllers\Api\Translation\CategoryTranslationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::resource('category', CategoryController::class);
Route::resource('article', ArticleController::class);
Route::resource('categoryTranslation', CategoryTranslationController::class);
Route::resource('articleTranslation', ArticleTranslationController::class);
Route::get('index', [IndexController::class, 'index']);
