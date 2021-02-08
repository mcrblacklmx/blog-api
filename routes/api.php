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

Route::group(['prefix' => 'v1'], function () {
    Route::post('login','Admin\AuthController@login');
    Route::post('logout','Admin\AuthController@logout');
    Route::post('refresh','Admin\AuthController@refresh');
    Route::post('me','Admin\AuthController@me');
});
Route::any('unLogin', function () {
    $data = [
        'errorCode' =>  301,
        'errorMsg'  =>  '请先登录'
    ];
    return response()->json($data);
})->name('unLogin');
