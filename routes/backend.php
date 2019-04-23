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

Route::get('/', 'Backend\UserController@signin_form');
Route::post('cms/user/signin', 'Backend\UserController@signin');

Route::group(['middleware' => 'ValidateKemhan'], function () {

	/* Home */
    Route::get('cms/tahun-anggaran', 'Backend\HomeController@tahun_anggaran');
	Route::get('cms/tahun-anggaran-baru', 'Backend\HomeController@tahun_anggaran_baru');
	Route::get('cms/tambah-sumber-anggaran', 'Backend\HomeController@tambah_sumber_anggaran');
	Route::get('cms/tambah-upload-pendapatan', 'Backend\HomeController@tambah_upload_pendapatan');
	Route::get('cms/buat-anggaran-selesai', 'Backend\HomeController@buat_anggaran_selesai');
	Route::get('cms/dashboard', 'Backend\HomeController@dashboard');
	Route::get('cms/anggaran', 'Backend\HomeController@anggaran');
	Route::get('cms/rincian-anggaran', 'Backend\HomeController@anggaran');
	Route::get('cms/rincian-anggaran-detail', 'Backend\HomeController@anggaran_detail');
	Route::get('cms/revisi-anggaran', 'Backend\HomeController@revisi_anggaran');
	Route::get('cms/edit-semua-revisi-anggaran', 'Backend\HomeController@edit_semua_revisi_anggaran');
	Route::get('cms/edit-revisi-anggaran', 'Backend\HomeController@edit_revisi_anggaran');
	Route::get('cms/realisasi-anggaran', 'Backend\HomeController@realisasi_anggaran');
	Route::get('cms/revisi-anggaran-detail', 'Backend\HomeController@revisi_anggaran_detail');
	Route::get('cms/realisasi-anggaran-detail', 'Backend\HomeController@realisasi_anggaran_detail');
	Route::get('cms/tambah-realisasi-anggaran', 'Backend\HomeController@tambah_realisasi_anggaran');
	//
	Route::get('cms/input-anggaran', 'Backend\HomeController@input_anggaran');
	//Laporan
	Route::get('cms/laporan-anggaran-belanja-pegawai', 'Backend\HomeController@laporan_pelaksanaan_abp');
	Route::post('cms/laporan-rincian-anggaran-belanja-pegawai', 'Backend\HomeController@laporan_rincian_abp');
	Route::get('cms/laporan-anggaran-belanja-modal', 'Backend\HomeController@laporan_belanja_modal');
	Route::post('cms/laporan-rincian-belanja-modal', 'Backend\HomeController@laporan_rincian_modal');

	//Signout
	Route::get('cms/signout', 'Backend\HomeController@signout');

});

Route::group(['middleware' => 'ValidateUO'], function () {

	/* UO */
    Route::get('cms/uo/tahun-anggaran', 'Backend\UOController@tahun_anggaran');
	Route::get('cms/uo/tahun-anggaran-baru', 'Backend\UOController@tahun_anggaran_baru');
	Route::get('cms/uo/tambah-sumber-anggaran', 'Backend\UOController@tambah_sumber_anggaran');
	Route::get('cms/uo/tambah-upload-pendapatan', 'Backend\UOController@tambah_upload_pendapatan');
	Route::get('cms/uo/buat-anggaran-selesai', 'Backend\UOController@buat_anggaran_selesai');
	Route::get('cms/uo/dashboard', 'Backend\UOController@dashboard');
	Route::get('cms/uo/anggaran', 'Backend\UOController@anggaran');
	Route::get('cms/uo/rincian-anggaran', 'Backend\UOController@anggaran');
	Route::get('cms/uo/rincian-anggaran-detail', 'Backend\UOController@anggaran_detail');
	Route::get('cms/uo/realisasi-anggaran', 'Backend\UOController@realisasi_anggaran');
	Route::get('cms/uo/realisasi-anggaran-detail', 'Backend\UOController@realisasi_anggaran_detail');
	Route::get('cms/uo/tambah-realisasi-anggaran', 'Backend\UOController@tambah_realisasi_anggaran');
	//
	Route::get('cms/uo/input-anggaran', 'Backend\UOController@input_anggaran');
	//Laporan
	Route::get('cms/uo/laporan-anggaran-belanja-pegawai', 'Backend\UOController@laporan_pelaksanaan_abp');
	Route::post('cms/uo/laporan-rincian-anggaran-belanja-pegawai', 'Backend\UOController@laporan_rincian_abp');
	Route::get('cms/uo/laporan-anggaran-belanja-modal', 'Backend\UOController@laporan_belanja_modal');
	Route::post('cms/uo/laporan-rincian-belanja-modal', 'Backend\UOController@laporan_rincian_modal');

	//Signout
	Route::get('cms/uo/signout', 'Backend\UOController@signout');

});

Route::group(['middleware' => 'ValidateKotama'], function () {

	/* Kotama */
    Route::get('cms/kotama/tahun-anggaran', 'Backend\KotamaController@tahun_anggaran');
	Route::get('cms/kotama/tahun-anggaran-baru', 'Backend\KotamaController@tahun_anggaran_baru');
	Route::get('cms/kotama/tambah-sumber-anggaran', 'Backend\KotamaController@tambah_sumber_anggaran');
	Route::get('cms/kotama/tambah-upload-pendapatan', 'Backend\KotamaController@tambah_upload_pendapatan');
	Route::get('cms/kotama/buat-anggaran-selesai', 'Backend\KotamaController@buat_anggaran_selesai');
	Route::get('cms/kotama/dashboard', 'Backend\KotamaController@dashboard');
	Route::get('cms/kotama/anggaran', 'Backend\KotamaController@anggaran');
	Route::get('cms/kotama/rincian-anggaran', 'Backend\KotamaController@anggaran');
	Route::get('cms/kotama/rincian-anggaran-detail', 'Backend\KotamaController@anggaran_detail');
	Route::get('cms/kotama/realisasi-anggaran', 'Backend\KotamaController@realisasi_anggaran');
	Route::get('cms/kotama/realisasi-anggaran-detail', 'Backend\KotamaController@realisasi_anggaran_detail');
	Route::get('cms/kotama/tambah-realisasi-anggaran', 'Backend\KotamaController@tambah_realisasi_anggaran');
	//
	Route::get('cms/kotama/input-anggaran', 'Backend\KotamaController@input_anggaran');
	//Laporan
	Route::get('cms/kotama/laporan-anggaran-belanja-pegawai', 'Backend\KotamaController@laporan_pelaksanaan_abp');
	Route::post('cms/kotama/laporan-rincian-anggaran-belanja-pegawai', 'Backend\KotamaController@laporan_rincian_abp');
	Route::get('cms/kotama/laporan-anggaran-belanja-modal', 'Backend\KotamaController@laporan_belanja_modal');
	Route::post('cms/kotama/laporan-rincian-belanja-modal', 'Backend\KotamaController@laporan_rincian_modal');

	//Signout
	Route::get('cms/kotama/signout', 'Backend\KotamaController@signout');


});

Route::group(['middleware' => 'ValidateSatKer'], function () {

	/* SatKer */
    Route::get('cms/satker/tahun-anggaran', 'Backend\SatKerController@tahun_anggaran');
	Route::get('cms/satker/tahun-anggaran-baru', 'Backend\SatKerController@tahun_anggaran_baru');
	Route::get('cms/satker/tambah-sumber-anggaran', 'Backend\SatKerController@tambah_sumber_anggaran');
	Route::get('cms/satker/tambah-upload-pendapatan', 'Backend\SatKerController@tambah_upload_pendapatan');
	Route::get('cms/satker/buat-anggaran-selesai', 'Backend\SatKerController@buat_anggaran_selesai');
	Route::get('cms/satker/dashboard', 'Backend\SatKerController@dashboard');
	Route::get('cms/satker/anggaran', 'Backend\SatKerController@anggaran');
	Route::get('cms/satker/rincian-anggaran', 'Backend\SatKerController@anggaran');
	Route::get('cms/satker/rincian-anggaran-detail', 'Backend\SatKerController@anggaran_detail');
	Route::get('cms/satker/realisasi-anggaran', 'Backend\SatKerController@realisasi_anggaran');
	Route::get('cms/satker/realisasi-anggaran-detail', 'Backend\SatKerController@realisasi_anggaran_detail');
	Route::get('cms/satker/tambah-realisasi-anggaran', 'Backend\SatKerController@tambah_realisasi_anggaran');
	//
	Route::get('cms/satker/input-anggaran', 'Backend\SatKerController@input_anggaran');
	//Laporan
	Route::get('cms/satker/laporan-anggaran-belanja-pegawai', 'Backend\SatKerController@laporan_pelaksanaan_abp');
	Route::post('cms/satker/laporan-rincian-anggaran-belanja-pegawai', 'Backend\SatKerController@laporan_rincian_abp');
	Route::get('cms/satker/laporan-anggaran-belanja-modal', 'Backend\SatKerController@laporan_belanja_modal');
	Route::post('cms/satker/laporan-rincian-belanja-modal', 'Backend\SatKerController@laporan_rincian_modal');

	//Signout
	Route::get('cms/satker/signout', 'Backend\SatKerController@signout');


});