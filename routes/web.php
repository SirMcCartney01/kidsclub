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
    return view('inicio');
});

Route::get('/inicio','ManualidadesControler@dashboard')->name('inicio');

/**************Rutas de los manualidades****************/
Route::get('/manualidades','ManualidadesControler@index')->name('manualidades.inicio');

Route::get('/manualidades/escolares','ManualidadesControler@escolar')->name('manualidad.escolar');
Route::get('/manualidades/escolares/bolamundo','ManualidadesControler@bolamundo')->name('manualidad.escolar.bolamundo');
Route::get('/manualidades/escolares/huevospintados','ManualidadesControler@huevospintados')->name('manualidad.escolar.huevospintados');
Route::get('/manualidades/escolares/pulsera','ManualidadesControler@pulsera')->name('manualidad.escolar.pulsera');
Route::get('/manualidades/escolares/sujetalibros','ManualidadesControler@sujetalibros')->name('manualidad.escolar.sujetalibros');


Route::get('/manualidades/navidad','ManualidadesControler@navidad')->name('manualidad.navidad');
Route::get('/manualidades/cumpleaños','ManualidadesControler@cumple')->name('manualidad.cumple');

/******************Ruta para coloreables**************/
Route::get('/coloreables','ColoreablesControler@index')->name('coloreables.inicio');