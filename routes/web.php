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
Route::get('/data/create', 'DataController@create');
Route::get('/data/{data}', 'DataController@show');
Route::post('/data', 'DataController@store');
Route::delete('/data/{data}', 'DataController@destroy');
Route::get('/data/{data}/edit', 'DataController@edit');
Route::patch('/data/{data}', 'DataController@update');

Route::get('/datas', 'DatasController@index');
Route::get('/datas/create', 'DatasController@create');
Route::get('/datas/{datas}', 'DatasController@show');
Route::post('/datas', 'DatasController@store');
Route::delete('/datas/{datas}', 'DatasController@destroy');
Route::get('/datas/{datas}/edit', 'DatasController@edit');
Route::patch('/datas/{datas}', 'DatasController@update');

// Route::get('/search', 'SearchController@index');
// Route::get('/search/create', 'SearchController@create');
// Route::get('/search/{src}', 'SearchController@show');
// Route::post('/search', 'SearchController@store');
// Route::delete('/search/{search}', 'SearchController@destroy');
// Route::get('/search/{search}/edit', 'SearchController@edit');

Auth::routes();