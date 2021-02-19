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
// cpc 
Route::get('/admin', function () {
     return view('alam');
    //echo "CPC";
});

Route::get('/laravel2021', 'PostController@index')->name('AnotherPage');
Route::get('/laravel', 'PostController@index')->name('AnotherPage');

