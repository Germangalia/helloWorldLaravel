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

Route::resource('persons', 'PersonsController');


















Route::get('/helloworld', "HolaMon@hello");

Route::get('/helloworld2', "HolaMon@hello2");

Route::get('/helloworld3', "HolaMon@hello");

Route::resource('user', 'UserController');

Route::get('prova1', function () {
    return '<h1>Hello World!</h1>';
});

Route::post('prova1', function () {
    return '<h1>Hello World!</h1>';
});

Route::get('prova2', function () {
    $content = '<h1>Hello World!</h1>';
    $status = 200;
    $contentType = "text/html";
    return response($content, $status)
        ->header('Content-Type', $contentType);
});

Route::get('prova3', function () {
    $content = '<h1>Hello World!</h1>';
    $status = 200;
    $contentType = "text/html";
    return response($content, $status)
        ->header('Content-Type', $contentType);
});

Route::get('prova4', function () {
    $content = '<h1>Hello World!</h1>';
    $status = 200;
    $contentType = "aplication/pdf";
    return response($content, $status)
        ->header('Content-Type', $contentType);
});

Route::get('prova5', function () {
    $content = '<h1>Hello World!</h1>';
    $status = 200;
    $contentType = "text/plain";
    return response($content, $status)
        ->header('Content-Type', $contentType);
});

Route::get('prova7', function () {
    $content = '<h1>Hello World!</h1>';
    $status = 200;
    $contentType = "text/plain";
    return response($content, $status)
        ->header('Content-Type', $contentType)
        ->header('HyHeader', 'HOLA');
});

Route::get('prova8', function () {
    $pathToFolder = public_path('prova.pdf');
    dd($pathToFolder);
    return response()->download($pathToFolder);
});

Route::get('prova9', function () {
    return response()->json([
        'name' => 'Abigale', 'state' => 'CA' ]);
});

Route::get('prova10', function () {
    return response()->json([
        'name' => 'Abigale', 'state' => 'CA' ]);
});

Route::get('prova11', function () {
    return redirect('http://www.google.com');
});