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

/* Ruta / */
Route::get( '/', 'PageController@home' )->name( 'home' );
/* Ruta /nosotros */
Route::get( '/nosotros', 'PageController@about' )->name( 'about' );
