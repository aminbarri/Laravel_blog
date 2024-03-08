<?php

use App\Http\Controllers\PagesConlroller;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\UserController;
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

Route::get('/', [PagesConlroller::class ,'index']);
Route::get('/register', [PagesConlroller::class ,'register']);
Route::get('/signin', [PagesConlroller::class ,'signin']);
Route::post('/store', [UserController::class, 'store'])->name('store');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::resource('/blog' ,Postcontroller::class);
