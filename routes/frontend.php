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
Route::get('tahun-anggaran', 'Frontend\HomeController@tahun_anggaran');
Route::get('tahun-anggaran-baru', 'Frontend\HomeController@tahun_anggaran_baru');
Route::get('tambah-sumber-anggaran', 'Frontend\HomeController@tambah_sumber_anggaran');
Route::get('dashboard', 'Frontend\HomeController@dashboard');
Route::get('anggaran', 'Frontend\HomeController@anggaran');
Route::get('rincian-anggaran', 'Frontend\HomeController@anggaran');
Route::get('rincian-anggaran-detail', 'Frontend\HomeController@anggaran_detail');
Route::get('realisasi-anggaran', 'Frontend\HomeController@realisasi_anggaran');
Route::get('realisasi-anggaran-detail', 'Frontend\HomeController@realisasi_anggaran_detail');
Route::get('tambah-realisasi-anggaran', 'Frontend\HomeController@tambah_realisasi_anggaran');
//
Route::get('input-anggaran', 'Frontend\HomeController@input_anggaran');
//Laporan
Route::get('laporan-anggaran-belanja-pegawai', 'Frontend\HomeController@laporan_pelaksanaan_abp');
Route::get('laporan-rincian-anggaran-belanja-pegawai', 'Frontend\HomeController@laporan_rincian_abp');
Route::get('laporan-anggaran-belanja-modal', 'Frontend\HomeController@laporan_belanja_modal');
Route::get('laporan-rincian-belanja-modal', 'Frontend\HomeController@laporan_rincian_modal');