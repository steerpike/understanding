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

Route::get('/', 'PeopleController@list')->name('people');
Route::get('/test', 'TestController@media');
Route::get('/{qid}', 'PeopleController@view')->name('person');
Route::post('/media/delete', 'MediaController@delete');

