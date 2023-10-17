<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/home', 'FrontEndController@homePage');
Route::get('fetch-users', 'FrontEndController@getUsers');
Route::post('add-users', 'FrontEndController@addUsers');
Route::delete('remove-user', 'FrontEndController@removeUser');
Route::put('edit-user', 'FrontEndController@editUser');


