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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function(){
    \App\Models\User::create([
        'name' => 'cxj',
        'email' => '412524345@qq.com',
        'password' => \Illuminate\Support\Facades\Hash::make('123456'),
    ]);
});
