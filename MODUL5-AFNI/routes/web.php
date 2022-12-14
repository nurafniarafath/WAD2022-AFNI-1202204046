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
    return view('home_afni');
});

Route::get('/add_afni', function () {
    return view('add_afni');
});

Route::get('/ListCar_afni', function () {
    return view('ListCar_afni');
});