<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ArticleController;


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

Route::get('/', [ArticleController::class, 'index'] );

Route::get('/yanchang', [ArticleController::class, 'yanchang'] );
Route::get('/authDetail', [ArticleController::class, 'authDetail'] );
Route::post('/authSearch', [ArticleController::class, 'authSearch'] );
Route::get('/articleDetail', [ArticleController::class, 'articleDetail'] );




Route::get('/tixi', [ArticleController::class, 'tixi'] );
Route::get('/grs', [ArticleController::class, 'grs'] );
Route::get('/success', [ArticleController::class, 'success'] );

Route::get('/news', [ArticleController::class, 'news'] );

Route::get('/abouts', [ArticleController::class, 'abouts'] );
Route::get('/liucheng', [ArticleController::class, 'liucheng'] );



