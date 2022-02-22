<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Shopping;

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
Route::get('users', 'UserController@index');
Route::post('users/signin', 'UserController@login');
Route::post('users/signup', 'UserController@register');

Route::get('shopping', 'ShoppingController@index');
Route::get('shopping/{shopping}', 'ShoppingController@show');
Route::post('shopping', 'ShoppingController@store');
Route::put('shopping/{shopping}', 'ShoppingController@update');
Route::delete('shopping/{shopping}', 'ShoppingController@destroy');
