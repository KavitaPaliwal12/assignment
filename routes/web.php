<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

// Route::get('/', function () {
//     return view('login');
// });
Route::get('/','App\Http\Controllers\AdminController@login')->name('login');
Route::get('/register','App\Http\Controllers\AdminController@register')->name('register');
Route::get('/forgotPassword','App\Http\Controllers\AdminController@forgotPassword')->name('forgotPassword');