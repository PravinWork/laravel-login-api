<?php

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

// Auth::routes();

Route::get('/login', 'DashboardController@login')->name('login');
Route::post('/login', 'DashboardController@doLogin');
Route::get('/logout', 'DashboardController@logout')->name('logout');
Route::get('/register', 'DashboardController@register')->name('register');
Route::post('/register', 'DashboardController@doRegister');

Route::get('/dashboard', 'DashboardController@index')->middleware('auth');

