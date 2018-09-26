<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
use App\Person;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/philosophers', function(){
    $philosophers = Person::select('name as content','id', 'year as start')
                ->whereNotNull('year')
                ->get();
    return response()->json($philosophers); 
});
