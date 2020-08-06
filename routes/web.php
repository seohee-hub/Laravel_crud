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
    return view('welcome');
});

Route::get('/main/index', 'NoticeController@index');

Route::get('/main/create', 'NoticeController@create');

Route::post('/main/store', 'NoticeController@store');

Route::get('/main/{id}/pw', 'NoticeController@password');

Route::post('/main/{id}', 'NoticeController@check');

Route::get('/main/{id}/read', 'NoticeController@read');

Route::get('/main/{id}/edit', 'NoticeController@edit');

Route::put('/main/{id}', 'NoticeController@update');

Route::delete('/main/{id}', 'NoticeController@delete');
