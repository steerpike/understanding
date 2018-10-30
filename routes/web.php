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
Route::post('/', 'PeopleController@search')->name('search');
Route::get('/test', 'TestController@media');
Route::get('/events/{event?}', 'EventsController@events');
Route::get('/philosophers/media', 'PeopleController@media');
Route::get('/philosophers/timeline', 'PeopleController@timeline');
Route::get('/philosophers/process/{event?}', 'PeopleController@process');
Route::get('/philosophers/between/{start}-{end}', 'PeopleController@between')->name('between');
Route::get('/philosophers/create/{name?}', 'PeopleController@create');
Route::get('/philosophers/{gender?}', 'PeopleController@list');
Route::get('/{qid}', 'PeopleController@view')->name('person');
Route::post('/media/delete', 'MediaController@delete');

