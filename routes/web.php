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

Route::get('/', function () {   //set www root is exam/public
    $senddata=['say'=>' hello ','message'=>' world!!'];
    return view('welcome',$senddata);//read exam/public/welcome.blade.php with parameter
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
