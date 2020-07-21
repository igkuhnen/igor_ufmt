<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/your', 'HomeController@your')->name('your');
Route::get('/nephelometro', 'ControladorNephelometro@index');
Route::get('/nephelometro/novo', 'ControladorNephelometro@create');
Route::post('/nephelometro', 'ControladorNephelometro@store');
Route::get('/nephelometro/apagar/{id}', 'ControladorNephelometro@destroy');
Route::get('/nephelometro/editar/{id}', 'ControladorNephelometro@edit');
Route::post('/nephelometro/{id}', 'ControladorNephelometro@update');


Route::get('/maap', 'ControladorMaap@index');
Route::get('/maap/novo', 'ControladorMaap@create');
Route::post('/maap', 'ControladorMaap@store');
Route::get('/maap/apagar/{id}', 'ControladorMaap@destroy');
Route::get('/maap/editar/{id}', 'ControladorMaap@edit');
Route::post('/maap/{id}', 'ControladorMaap@update');

Route::get('/aethalometro', 'ControladorAethalometro@index');
Route::get('/aethalometro/novo', 'ControladorAethalometro@create');
Route::post('/aethalometro', 'ControladorAethalometro@store');
Route::get('/aethalometro/apagar/{id}', 'ControladorAethalometro@destroy');
Route::get('/aethalometro/editar/{id}', 'ControladorAethalometro@edit');
Route::post('/aethalometro/{id}', 'ControladorAethalometro@update');

Route::get('/perfilsolo', 'ControladorPerfilsolo@index');
Route::get('/perfilsolo/novo', 'ControladorPerfilsolo@create');
Route::post('/perfilsolo', 'ControladorPerfilsolo@store');
Route::get('/perfilsolo/apagar/{id}', 'ControladorPerfilsolo@destroy');
Route::get('/perfilsolo/editar/{id}', 'ControladorPerfilsolo@edit');
Route::post('/perfilsolo/{id}', 'ControladorPerfilsolo@update');
Route::resource('perfilsolo', 'ControladorPerfilsolo');

Route::get('exportaNephe', 'ControladorImpexpNephelometro@exporta')->name('exportaNephe');
Route::get('ImpExpNepheView', 'ControladorImpexpNephelometro@ImpExpNepheView');
Route::post('importaNephe', 'ControladorImpexpNephelometro@importa')->name('importaNephe');

Route::get('exportaMaap', 'ControladorImpExpMaap@exporta')->name('exportaMaap');
Route::get('ImpExpMaapView', 'ControladorImpExpMaap@ImpExpMaapView');
Route::post('importaMaap', 'ControladorImpExpMaap@importa')->name('importaMaap');

Route::get('exportaAetha', 'ControladorImpExpAethalometro@exporta')->name('exportaAetha');
Route::get('ImpExpaAethaView', 'ControladorImpExpAethalometro@ImpExpaAethaView');
Route::post('importaAetha', 'ControladorImpExpAethalometro@importa')->name('importaAetha');

Route::get('exportaPerfilSolo', 'ControladorImpExpPerfilSolo@exporta')->name('exportaPerfilSolo');
Route::get('ImpExpPerfilSoloView', 'ControladorImpExpPerfilSolo@ImpExpPerfilSoloView');
Route::post('importaPerfilSolo', 'ControladorImpExpPerfilSolo@importa')->name('importaPerfilSolo');

Route::get('/conhecanephelometro', function () {
    return view('conhecanephelometro');
});

Route::get('/conhecaaethalometro', function () {
    return view('conhecaaethalometro');
});

Route::get('/conhecafluxo', function () {
    return view('conhecafluxo');
});

Route::get('/conhecasolo', function () {
    return view('conhecasolo');
});

Route::get('/conhecamaap', function () {
    return view('conhecamaap');
});

Route::get('/graficos', function () {
    return view('graficos');
});

Route::get('/home', 'HomeController@index')->name('home');




