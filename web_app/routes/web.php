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

Route::get('/','Front\HomeController@index')->name('homepage');


//Route::put('/plants/store', 'Front\PlantsController@store')->name('plants.store');
Route::resource('/plants', 'Front\PlantsController');






Route::get('/login', function () {
    return view('login');
});

Route::any('adminer', '\Miroc\LaravelAdminer\AdminerController@index');
