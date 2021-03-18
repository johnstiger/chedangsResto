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
    return redirect()->route('home');
});

Route::get('/chedangsResto','Customer\CustomerController@index')->name('home');
Route::post('/chedangsResto/register/{id}','Customer\CustomerController@create')->name('goRegister');
Route::post('/chedangsResto/Welcome','Customer\CustomerController@store')->name('register');
Route::get('/chedangsResto/orderForm/{id}','Customer\OrderController@edit')->name('orderForm');
Route::get('/chedangsResto/history','Customer\OrderController@index')->name('history');
