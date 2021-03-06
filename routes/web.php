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
Route::get('/philosophers/timeline', 'PeopleController@timeline');
Route::get('/philosophers/process/{event?}', 'PeopleController@process');
Route::get('/philosophers/categories', 'PeopleController@categories');
Route::get('/philosophers/category/{category?}', 'PeopleController@category');
Route::get('/philosophers/topics/{topic?}', 'PeopleController@topic');
Route::get('/philosophers/between/{start}_{end}', 'PeopleController@between')->name('between');
Route::get('/philosophers/{gender?}', 'PeopleController@list');
Route::get('/{id}', 'PeopleController@view')->name('person');
if (App::environment('local')) {
    Route::post('/media/delete', 'MediaController@delete');
    Route::get('/test', 'TestController@bookParse');
    Route::get('/book/{id?}', 'TestController@book');
    Route::get('/events/{event?}', 'EventsController@events');
    Route::get('/philosophers/media', 'PeopleController@media');
    Route::get('/philosophers/create/{name?}', 'PeopleController@create');
}


