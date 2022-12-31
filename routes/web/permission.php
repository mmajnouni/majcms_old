<?php

use Illuminate\Support\Facades\Route;

Route::get('/permission', 'PermissionController@index')->name('permission.index');
Route::get('/permission/{permission}/edit', 'PermissionController@edit')->name('permission.edit');
Route::delete('/permission/{permission}/destroy', 'PermissionController@destroy')->name('permission.destroy');
Route::post('/permission', 'PermissionController@store')->name('permission.store');
Route::put('/permission/{permission}/update', 'PermissionController@update')->name('permission.update');
