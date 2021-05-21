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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('layout/css');
Route::get('/index', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/data', 'DataController@index');
Route::get('/datas', 'DatasController@index');
Route::get('/datas/create', 'DatasController@create');
Route::get('/datas/{datas}', 'DatasController@show');
Route::post('/datas', 'DatasController@store');
Route::delete('/datas/{datas}', 'DatasController@destroy');
Route::get('/datas/{datas}/edit', 'DatasController@edit');
Route::patch('/datas/{datas}', 'DatasController@update');
Auth::routes();