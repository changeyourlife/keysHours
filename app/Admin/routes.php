<?php

Route::get('', ['as' => 'admin.dashboard', 'uses' => '\App\Http\Controllers\ControllerBackOffice@index']);

Route::get('/applications', ['as' => 'getApp', 'uses' => '\App\Http\Controllers\ControllerBackOffice@applications']);
Route::get('/applications/sync', ['as' => 'getAppSync', 'uses' => '\App\Http\Controllers\ControllerApplications@sync']);

Route::get('/steam/api/GetAppList', ['as' => 'API_GetAppList', 'uses' => '\App\Http\Controllers\ControllerSteamApi@GetAppList']);