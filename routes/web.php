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
Route::get('/boolean/studenti', 'BooleanController@index')->name('boolean.index');
Route::get('/boolean/studenti/{slug}', 'BooleanController@getStudentByName')->name('boolean.getStudentByName');
Route::post('/boolean/studenti', 'BooleanController@postStudentByAge')->name('boolean.postStudentByAge');
