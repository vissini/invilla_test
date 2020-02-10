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

Route::get('/','FilesController@index');
Route::get('upload','FilesController@fileCreate')->name('upload');;
Route::post('upload/store','FilesController@fileStore');
Route::post('delete','FilesController@fileDestroy');
Route::post('post/{id}','FilesController@fileGet')->name('fileGet');
