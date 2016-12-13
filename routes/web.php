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

Route::get('/inicio', function() {
	return view('inicio');
});

Route::get('/smenu', function() {
	return view('smenu');
});

Route::get('/dmenu', function() {
	return view('dmenu');
});

Route::get('/llenado', function() {
	return view('llenado');
});

Route::get('/minutas', function() {
	return view('minutas');
});