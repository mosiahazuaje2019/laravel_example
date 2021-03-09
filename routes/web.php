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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/publications','PublicationController@index')->name('publication');
Route::get('/publicationsAdd', 'PublicationController@create')->name('create');
Route::post('/publicationsStore', 'PublicationController@store')->name('store');
Route::get('/publicationsEdit/{id}', 'PublicationController@edit')->name('edit');
Route::put('/publicationsUpdate/{id}', 'PublicationController@update')->name('update');
Route::delete('/publicationsDelete/{id}', 'PublicationController@destroy')->name('destroy');
Route::get('/publicationsShow/{id}', 'PublicationController@show')->name('show');

Route::get('/comments/add/{id}', 'CommentController@add')->name('add');
Route::post('/commentsStore', 'CommentController@store')->name('store');
