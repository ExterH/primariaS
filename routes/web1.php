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
    
Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/layout', function(){return view('layout.menu');})->middleware('auth');
Route::get('/init6', function(){return view('login.login7');});

Route::get('menu', 'AlumController@init')->name('menu')->middleware('auth');
//Alumnos
Route::resource('alumnos', 'AlumController')->middleware('auth');
Route::delete('alumnos/{id}', 'AlumController@delete')->name('alumnos.destroy')->middleware('auth');
Route::get('alumnos/{id}/edit', 'AlumController@edit')->name('alumnos.edit')->middleware('auth');
Route::post('alumnos/{id}', 'AlumController@update')->name('alumnos.update')->middleware('auth');
Route::get('alumno/{id}/detalle', 'AlumController@detalle')->name('alumnos.detalle')->middleware('auth');

//anuncios
Route::get('add', 'AnunciosController@index')->name('anuncios')->middleware('auth');
Route::get('add/create', 'AnunciosController@create')->name('add.create')->middleware('auth');
Route::post('add/store', 'AnunciosController@store')->name('add.store')->middleware('auth');
Route::get('add/{id}/edit', 'AnunciosController@edit')->name('add.edit')->middleware('auth');
Route::put('add/{id}', 'AnunciosController@update')->name('add.update')->middleware('auth');
Route::delete('add/{id}', 'AnunciosController@delete')->name('add.destroy')->middleware('auth');
Route::post('multipart/form-data', 'trainercontroller@store')->middleware('auth');


//login1.1
Route::get('init', 'Auth\LoginController@init6')->name('init');
Route::post('validar', 'Auth\LoginController@validar')->name('validar');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('registrar', 'Auth\LoginController@registrar')->name('registrar');
Route::post('validarRegistro', 'Auth\LoginController@validarRegistro')->name('validarRegistro');
Route::get('restablecer', 'Auth\LoginController@restablecer')->name('login.restablecer');
Route::post('vresta', 'Auth\LoginController@vresta')->name('vresta');
//Route::get('restablecer/{id}/contra', 'Auth\LoginController@rc1')->name('rc1');


//clubs
Route::resource('clubs', 'ClubControllers')->middleware('auth');
Route::get('clubs/{id}/edit', 'ClubControllers@edit')->name('clubs.edit')->middleware('auth');
Route::delete('clubs/{id}', 'ClubControllers@delete')->name('clubs.destroy')->middleware('auth');
// Route::get('clubs/{id}/edit', 'ClubControllers@edit')->name('clubs.edit')->middleware('auth');
Route::post('clubs/{id}', 'ClubControllers@update')->name('clubs.update')->middleware('auth');

Route::get('Todos', 'ClubControllers@todos')->name('clubs.todos')->middleware('auth');
Route::get('club/{id}/detalle', 'ClubControllers@detalles')->name('clubs.detalles')->middleware('auth');

//banners
Route::resource('banners', 'BannerController')->middleware('auth');
Route::get('baners','BannerController@index')->middleware('auth');
Route::get('banners/{id}/edit', 'BannerController@edit')->middleware('auth')->name('banners.edit');
Route::post('banners/{id}', 'BannerController@update')->middleware('auth')->name('banners.update');
Route::delete('banners/{id}', 'BannerController@delete')->middleware('auth')->name('banners.destroy');

//archivos
Route::resource('filles', 'FillesController')->middleware('auth');
Route::get('filles/{id}/edit', 'FillesController@edit')->middleware('auth')->name('filles.edit');
Route::post('filles/{id}', 'FillesController@update')->middleware('auth')->name('filles.update');
Route::delete('filles/{id}', 'FillesController@delete')->middleware('auth')->name('filles.destroy');
Route::get('filles/{id}/detalles','FillesController@show')->middleware('auth')->name('filles.detalle');

//calificaciones
Route::resource('calificaciones', 'CalifController')->middleware('auth');

//pagina
Route::get('/index', function(){return view('layout.pagina');})->name('pagina.index');
Route::name('pagina.inicio')->get('/', function(){return view('pagina.inicio');});
Route::get('/conocenos', function(){return view('pagina.conocenos');})->name('pagina.conocenos');
Route::get('/feature', function(){return view('pagina.feature');})->name('pagina.feature');
Route::get('/pricing', function(){return view('pagina.pricing');})->name('pagina.pricing');
Route::get('/team', function(){return view('pagina.team');})->name('pagina.team');
Route::get('/galeria', function(){return view('pagina.galeria');})->name('pagina.galeria');
Route::get('/contactanos', function(){return view('pagina.contactanos');})->name('pagina.contactanos');
// Route::get('avisos', 'AnunciosController@anuncios1')->name('pagina.avisos');
Route::get('/eventos', function(){return view('pagina.eventos');})->name('pagina.eventos');
Route::get('/compu', function(){return view('pagina.compu');})->name('pagina.compu');
Route::get('/matematicas', function(){return view('pagina.matematicas');})->name('pagina.matematicas');
Route::get('/ciencias', function(){return view('pagina.ciencias');})->name('pagina.ciencias');
Route::get('avisos', 'AnunciosController@an')->name('pagina.avisos');
Route::get('avisos/{id}/informacion', 'AnunciosController@info')->name('pagina.info');  
Route::get('loggin', function(){return view('pagina.login');})->name('pagina.loggin');                     
                       
//------------------------------------------email------------------------------------------
Route::name('email.respuesta')->post('/contacto', 'emailController@send');
Route::name('email.movimiento')->post('/movimiento', 'emailController@movimientos');

Route::get('registrar2', 'Login1Controller@register')->name('login.register');
Route::post('guardar', 'Login1Controller@store')->name('login.store');

// Route::