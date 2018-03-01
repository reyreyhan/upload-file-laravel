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

//Route::resource('tamu','TamuController');

// <!-- Routingan -->
Route::resource('/tamu','TamuController');

//localhost:8000/ untuk index page
//localhost:8000/create untuk membuat halaman
//localhost:8000/store untuk method insert
//localhost:8000/{id} untuk view suatu halaman berdasarkan id
//localhost:8000/{id}/edit untuk mengedit
//localhost:8000/{id}/destroy untuk menghapus
// <!-- Routingan -->

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('template', function() {
    return view('tamu2');
});*/
