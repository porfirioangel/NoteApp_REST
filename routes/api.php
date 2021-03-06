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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('create', 'NotesController@create');

Route::put('update', 'NotesController@update');

Route::get('all', 'NotesController@getAll');

Route::get('get', 'NotesController@get');

Route::delete('delete', 'NotesController@delete');
