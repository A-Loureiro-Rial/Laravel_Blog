<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;

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

Route::get('/posts', [PostController::class, 'all']);
Route::get('/form', [PostController::class, 'create']);
Route::get('/showPost/{post}', [PostController::class, 'showPost']);
Route::post('/form/save', [PostController::class, 'save']);
Route::post('/comment/save', [CommentController::class, 'save']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login/authenticate', [LoginController::class, 'authenticate']);
Route::get('/login/dashboard', [LoginController::class, 'dashboard']);
Route::post('/login/form', [LoginController::class, 'form']);
Route::post('/login/create', [LoginController::class, 'createUser']);
Route::post('/login/logout', [LoginController::class, 'logout']);


