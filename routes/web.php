<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['role:admin'],'prefix'=>'admin','as'=>'admin.'], function () {
    Route::resource('invoice', App\Http\Controllers\Admin\InvoiceController::class);
    Route::resource('profile', App\Http\Controllers\Admin\ProfileController::class);
});

Route::group(['middleware' => ['role:user'],'prefix'=>'user','as'=>'user.'], function () {
    Route::resource('invoice', App\Http\Controllers\User\InvoiceController::class);
    Route::resource('profile', App\Http\Controllers\User\ProfileController::class);
});