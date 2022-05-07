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

Route::get('/', 'App\Http\Controllers\BlogController@index');
Route::get('/post/{slug}', 'App\Http\Controllers\BlogController@show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
