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


Route::prefix('firebase')->group(function () {
    Route::get('insert', 'FirebaseDBController@insert');
    Route::get('get_data', 'FirebaseDBController@getData');
    Route::get('update', 'FirebaseDBController@update');
    Route::get('delete', 'FirebaseDBController@delete');
    Route::get('delete_all', 'FirebaseDBController@deleteAll');
});
Route::view('banjir', 'banjir');
Route::view('coba', 'coba');
Route::view('bisa', 'bisa');

//yang dipake
Route::get('/', function () {
    return view('home');});
Route::get('dashboard', function () {
    return view('lagi');}); //welcome
Route::view('about', 'about');
Route::view('feedback', 'feedback');
Route::view('log', 'log');

//sampai sini
Route::view('jadi', 'jadi');
Route::view('admin', 'admin');
Route::view('mon', 'monitor');
Route::view('latihan', 'latihan');
Route::get('users', 'UserChartController@index');