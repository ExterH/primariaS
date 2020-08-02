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

//Modulo Alumnos
Route::get('/Alumnos', 'ReactAlumnosController@index')->name('react.alumnos.inicio');
Route::get('/Grados', 'ReactAlumnosController@index1')->name('react.Grados.index1');
Route::get('/Alumnos-show', 'ReactAlumnosController@show')->name('react.alumnos.show');
Route::post('/alumnos-store', 'ReactAlumnosController@store');
Route::put('/alumnos/edit/{id}', 'ReactAlumnosController@update');


