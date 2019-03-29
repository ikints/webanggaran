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


/* Home */
Route::get('/', 'Frontend\HomeController@index');
Route::get('dashboard', 'Frontend\HomeController@dashboard');
Route::get('anggaran', 'Frontend\HomeController@anggaran');
Route::get('rincian-anggaran', 'Frontend\HomeController@anggaran');
Route::get('rincian-anggaran-detail', 'Frontend\HomeController@anggaran_detail');
//
Route::get('input-anggaran', 'Frontend\HomeController@input_anggaran');