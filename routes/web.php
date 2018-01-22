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
Auth::routes();


//routes for site (front-office)
Route::get('/', 'ControllerSite@index')->name('getIndex');
Route::get('/catalog', 'ControllerSite@catalog')->name('getCatalog');