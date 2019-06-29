<?php

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

Route::get('/', ["uses" => "HomeController@index"]);

Route::get('/banks', ["uses" => "BankController@index"])->name('bank');
Route::post('/banks', ["uses" => "BankController@fetch"]);

Route::resource('customer', "CustomerController");
