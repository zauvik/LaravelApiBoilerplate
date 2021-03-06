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

Route::group(['prefix' => 'auth'], function () {
    Route::post('/user/login', 'MultiAuthController@loginUser');
    Route::post('/admin/login', 'MultiAuthController@loginAdmin');

    Route::post('/user/register', 'MultiAuthController@registerUser');
    Route::post('/admin/register', 'MultiAuthController@registerAdmin');
});

Route::middleware('multiauth:user')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('multiauth:admin')->get('/admin', function (Request $request) {
    return $request->user();
});