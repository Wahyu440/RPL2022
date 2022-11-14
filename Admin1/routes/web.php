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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

// Operator Routes
Route::Resource('operator', 'OperatorController');

//  Bus Route
Route::Resource('bus','BusController');
Route::get('/bus/deleteBus/{id}','BusController@destroy');

//  Region Route
Route::Resource('region','RegionController');

//  Sub Region Route
Route::Resource('sub-region','Sub_RegionController');

Auth::routes();