<?php

use Illuminate\Support\Facades\Route;

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
Route::get( '/' , 'ambiente_cntlr@inicio' );
Route::post( '/' , 'ambiente_cntlr@inicio' );



Route::get( '/ingresos' , 'ambiente_cntlr@ingresos' );
Route::post( '/ingresos' , 'ambiente_cntlr@ingresos' );


