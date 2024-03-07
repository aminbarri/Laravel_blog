<?php

use App\Http\Controllers\PagesConlroller;
use App\Http\Controllers\Postcontroller;
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
Route::resource('/blog' ,Postcontroller::class);
