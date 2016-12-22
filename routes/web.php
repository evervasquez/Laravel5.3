<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('page.welcome');
});

Route::get('/contact', function () {
    $names = [
      'ever', 'jose', 'daniel'
    ];
//    $name = 'jose';
    return view('page.contact', compact('names'));
});

Route::post('/test/validation', 'PageController@index');