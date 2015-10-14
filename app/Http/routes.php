<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\HolaMon;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helloworld', "HolaMonController@hello");

Route::get('/helloworld2', "HolaMonController@hello2");

Route::get('/helloworld3', "HolaMonController2@hello");