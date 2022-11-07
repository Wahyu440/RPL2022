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
    return view('home');
});
Route::get('/areaTransAdmin', function () {
    return view('areaTrans');
});
Route::get('/masterDataArea', function () {
    return view('dataArea');
});
Route::get('/masterDataSifat', function () {
    return view('dataSifat');
});
Route::get('/masterDataCustomer', function () {
    return view('dataCustomer');
});
Route::get('/masterDataBus', function () {
    return view('dataBus');
});