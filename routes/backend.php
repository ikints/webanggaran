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
	Route::get('cms/revisi-anggaran-detail', 'Backend\HomeController@revisi_anggaran_detail');
	Route::get('cms/realisasi-anggaran', 'Backend\HomeController@realisasi_anggaran');
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

	/* Kemhan UO */
    Route::get('cms/kemhan/uo/tahun-anggaran', 'Backend\UOController@tahun_anggaran');
	Route::get('cms/kemhan/uo/tahun-anggaran-baru', 'Backend\UOController@tahun_anggaran_baru');
	Route::get('cms/kemhan/uo/tambah-sumber-anggaran', 'Backend\UOController@tambah_sumber_anggaran');
	Route::get('cms/kemhan/uo/tambah-upload-pendapatan', 'Backend\UOController@tambah_upload_pendapatan');
	Route::get('cms/kemhan/uo/buat-anggaran-selesai', 'Backend\UOController@buat_anggaran_selesai');
	Route::get('cms/kemhan/uo/dashboard', 'Backend\UOController@dashboard');
	Route::get('cms/kemhan/uo/anggaran', 'Backend\UOController@anggaran');
	Route::get('cms/kemhan/uo/rincian-anggaran', 'Backend\UOController@anggaran');
	Route::get('cms/kemhan/uo/rincian-anggaran-detail', 'Backend\UOController@anggaran_detail');
	Route::get('cms/kemhan/uo/revisi-anggaran', 'Backend\UOController@revisi_anggaran');
	Route::get('cms/kemhan/uo/edit-semua-revisi-anggaran', 'Backend\UOController@edit_semua_revisi_anggaran');
	Route::get('cms/kemhan/uo/edit-revisi-anggaran', 'Backend\UOController@edit_revisi_anggaran');
	Route::get('cms/kemhan/uo/revisi-anggaran-detail', 'Backend\UOController@revisi_anggaran_detail');
	Route::get('cms/kemhan/uo/realisasi-anggaran', 'Backend\UOController@realisasi_anggaran');
	Route::get('cms/kemhan/uo/realisasi-anggaran-detail', 'Backend\UOController@realisasi_anggaran_detail');
	Route::get('cms/kemhan/uo/tambah-realisasi-anggaran', 'Backend\UOController@tambah_realisasi_anggaran');
	//
	Route::get('cms/kemhan/uo/input-anggaran', 'Backend\UOController@input_anggaran');
	//Laporan
	Route::get('cms/kemhan/uo/laporan-anggaran-belanja-pegawai', 'Backend\UOController@laporan_pelaksanaan_abp');
	Route::post('cms/kemhan/uo/laporan-rincian-anggaran-belanja-pegawai', 'Backend\UOController@laporan_rincian_abp');
	Route::get('cms/kemhan/uo/laporan-anggaran-belanja-modal', 'Backend\UOController@laporan_belanja_modal');
	Route::post('cms/kemhan/uo/laporan-rincian-belanja-modal', 'Backend\UOController@laporan_rincian_modal');
	Route::get('cms/kemhan/uo/laporan-anggaran-belanja-barang', 'Backend\UOController@laporan_belanja_barang');
	Route::post('cms/kemhan/uo/laporan-rincian-belanja-barang', 'Backend\UOController@laporan_rincian_barang');
	//Laporan
	Route::get('cms/kemhan/uo/laporan-realisasi-anggaran-pendapatan', 'Backend\UOController@laporan_realisasi_anggaran_pendapatan');
	Route::get('cms/kemhan/uo/laporan-realisasi-anggaran-belanja-perwilayah', 'Backend\UOController@laporan_realisasi_anggaran_belanja_perwilayah');
	Route::get('cms/kemhan/uo/laporan-realisasi-anggaran-belanja-menurut-jenis-belanja', 'Backend\UOController@laporan_realisasi_anggaran_belanja_menurut_jenis_belanja');
	//
	Route::get('cms/kemhan/uo/laporan-pelaksanaan-barang-dan-jasa', 'Backend\UOController@laporan_pelaksanaan_barang_dan_jasa');
	Route::get('cms/kemhan/uo/laporan-pelaksanaan-perkembangan-kegiatan-prioritas', 'Backend\UOController@laporan_pelaksanaan_perkembangan_kegiatan_prioritas');
	Route::get('cms/kemhan/uo/laporan-pelaksanaan-perkembangan-pembangunan-dan-fasilitas', 'Backend\UOController@laporan_pelaksanaan_perkembangan_pembangunan_dan_fasilitas');
	Route::get('cms/kemhan/uo/laporan-realisasi-pelaksanaan-anggaran-perjenis-belanja', 'Backend\UOController@laporan_realisasi_pelaksanaan_anggaran_perjenis_belanja');

	//Signout
	Route::get('cms/kemhan/uo/signout', 'Backend\UOController@signout');

	/* Mabes TNI */
	Route::get('cms/mabes-tni/uo/tahun-anggaran', 'Backend\MabesTniUOController@tahun_anggaran');
	Route::get('cms/mabes-tni/uo/tahun-anggaran-baru', 'Backend\MabesTniUOController@tahun_anggaran_baru');
	Route::get('cms/mabes-tni/uo/tambah-sumber-anggaran', 'Backend\MabesTniUOController@tambah_sumber_anggaran');
	Route::get('cms/mabes-tni/uo/tambah-upload-pendapatan', 'Backend\MabesTniUOController@tambah_upload_pendapatan');
	Route::get('cms/mabes-tni/uo/buat-anggaran-selesai', 'Backend\MabesTniUOController@buat_anggaran_selesai');
	Route::get('cms/mabes-tni/uo/dashboard', 'Backend\MabesTniUOController@dashboard');
	Route::get('cms/mabes-tni/uo/anggaran', 'Backend\MabesTniUOController@anggaran');
	Route::get('cms/mabes-tni/uo/revisi-anggaran', 'Backend\MabesTniUOController@revisi_anggaran');
	Route::get('cms/mabes-tni/uo/edit-semua-revisi-anggaran', 'Backend\MabesTniUOController@edit_semua_revisi_anggaran');
	Route::get('cms/mabes-tni/uo/edit-revisi-anggaran', 'Backend\MabesTniUOController@edit_revisi_anggaran');
	Route::get('cms/mabes-tni/uo/revisi-anggaran-detail', 'Backend\MabesTniUOController@revisi_anggaran_detail');
	Route::get('cms/mabes-tni/uo/rincian-anggaran', 'Backend\MabesTniUOController@anggaran');
	Route::get('cms/mabes-tni/uo/rincian-anggaran-detail', 'Backend\MabesTniUOController@anggaran_detail');
	Route::get('cms/mabes-tni/uo/realisasi-anggaran', 'Backend\MabesTniUOController@realisasi_anggaran');
	Route::get('cms/mabes-tni/uo/realisasi-anggaran-detail', 'Backend\MabesTniUOController@realisasi_anggaran_detail');
	Route::get('cms/mabes-tni/uo/tambah-realisasi-anggaran', 'Backend\MabesTniUOController@tambah_realisasi_anggaran');
	//
	Route::get('cms/mabes-tni/uo/input-anggaran', 'Backend\MabesTniUOController@input_anggaran');
	//Laporan
	Route::get('cms/mabes-tni/uo/laporan-anggaran-belanja-pegawai', 'Backend\MabesTniUOController@laporan_pelaksanaan_abp');
	Route::post('cms/mabes-tni/uo/laporan-rincian-anggaran-belanja-pegawai', 'Backend\MabesTniUOController@laporan_rincian_abp');
	Route::get('cms/mabes-tni/uo/laporan-anggaran-belanja-modal', 'Backend\MabesTniUOController@laporan_belanja_modal');
	Route::post('cms/mabes-tni/uo/laporan-rincian-belanja-modal', 'Backend\MabesTniUOController@laporan_rincian_modal');
	Route::get('cms/mabes-tni/uo/laporan-anggaran-belanja-barang', 'Backend\MabesTniUOController@laporan_belanja_barang');
	Route::post('cms/mabes-tni/uo/laporan-rincian-belanja-barang', 'Backend\MabesTniUOController@laporan_rincian_barang');

	//Signout
	Route::get('cms/mabes-tni/uo/signout', 'Backend\MabesTniUOController@signout');

	/* TNI AD */
	Route::get('cms/tni-ad/uo/tahun-anggaran', 'Backend\TniADUOController@tahun_anggaran');
	Route::get('cms/tni-ad/uo/tahun-anggaran-baru', 'Backend\TniADUOController@tahun_anggaran_baru');
	Route::get('cms/tni-ad/uo/tambah-sumber-anggaran', 'Backend\TniADUOController@tambah_sumber_anggaran');
	Route::get('cms/tni-ad/uo/tambah-upload-pendapatan', 'Backend\TniADUOController@tambah_upload_pendapatan');
	Route::get('cms/tni-ad/uo/buat-anggaran-selesai', 'Backend\TniADUOController@buat_anggaran_selesai');
	Route::get('cms/tni-ad/uo/dashboard', 'Backend\TniADUOController@dashboard');
	Route::get('cms/tni-ad/uo/anggaran', 'Backend\TniADUOController@anggaran');
	Route::get('cms/tni-ad/uo/revisi-anggaran', 'Backend\TniADUOController@revisi_anggaran');
	Route::get('cms/tni-ad/uo/edit-semua-revisi-anggaran', 'Backend\TniADUOController@edit_semua_revisi_anggaran');
	Route::get('cms/tni-ad/uo/edit-revisi-anggaran', 'Backend\TniADUOController@edit_revisi_anggaran');
	Route::get('cms/tni-ad/uo/revisi-anggaran-detail', 'Backend\TniADUOController@revisi_anggaran_detail');
	Route::get('cms/tni-ad/uo/rincian-anggaran', 'Backend\TniADUOController@anggaran');
	Route::get('cms/tni-ad/uo/rincian-anggaran-detail', 'Backend\TniADUOController@anggaran_detail');
	Route::get('cms/tni-ad/uo/realisasi-anggaran', 'Backend\TniADUOController@realisasi_anggaran');
	Route::get('cms/tni-ad/uo/realisasi-anggaran-detail', 'Backend\TniADUOController@realisasi_anggaran_detail');
	Route::get('cms/tni-ad/uo/tambah-realisasi-anggaran', 'Backend\TniADUOController@tambah_realisasi_anggaran');
	//
	Route::get('cms/tni-ad/uo/input-anggaran', 'Backend\TniADUOController@input_anggaran');
	//Laporan
	Route::get('cms/tni-ad/uo/laporan-anggaran-belanja-pegawai', 'Backend\TniADUOController@laporan_pelaksanaan_abp');
	Route::post('cms/tni-ad/uo/laporan-rincian-anggaran-belanja-pegawai', 'Backend\TniADUOController@laporan_rincian_abp');
	Route::get('cms/tni-ad/uo/laporan-anggaran-belanja-modal', 'Backend\TniADUOController@laporan_belanja_modal');
	Route::post('cms/tni-ad/uo/laporan-rincian-belanja-modal', 'Backend\TniADUOController@laporan_rincian_modal');
	Route::get('cms/tni-ad/uo/laporan-anggaran-belanja-barang', 'Backend\TniADUOController@laporan_belanja_barang');
	Route::post('cms/tni-ad/uo/laporan-rincian-belanja-barang', 'Backend\TniADUOController@laporan_rincian_barang');

	//Signout
	Route::get('cms/tni-ad/uo/signout', 'Backend\TniADUOController@signout');


	/* TNI AU */
	Route::get('cms/tni-au/uo/tahun-anggaran', 'Backend\TniAUUOController@tahun_anggaran');
	Route::get('cms/tni-au/uo/tahun-anggaran-baru', 'Backend\TniAUUOController@tahun_anggaran_baru');
	Route::get('cms/tni-au/uo/tambah-sumber-anggaran', 'Backend\TniAUUOController@tambah_sumber_anggaran');
	Route::get('cms/tni-au/uo/tambah-upload-pendapatan', 'Backend\TniAUUOController@tambah_upload_pendapatan');
	Route::get('cms/tni-au/uo/buat-anggaran-selesai', 'Backend\TniAUUOController@buat_anggaran_selesai');
	Route::get('cms/tni-au/uo/dashboard', 'Backend\TniAUUOController@dashboard');
	Route::get('cms/tni-au/uo/anggaran', 'Backend\TniAUUOController@anggaran');
	Route::get('cms/tni-au/uo/rincian-anggaran', 'Backend\TniAUUOController@anggaran');
	Route::get('cms/tni-au/uo/revisi-anggaran', 'Backend\TniAUUOController@revisi_anggaran');
	Route::get('cms/tni-au/uo/edit-semua-revisi-anggaran', 'Backend\TniAUUOController@edit_semua_revisi_anggaran');
	Route::get('cms/tni-au/uo/edit-revisi-anggaran', 'Backend\TniAUUOController@edit_revisi_anggaran');
	Route::get('cms/tni-au/uo/revisi-anggaran-detail', 'Backend\TniAUUOController@revisi_anggaran_detail');
	Route::get('cms/tni-au/uo/rincian-anggaran-detail', 'Backend\TniAUUOController@anggaran_detail');
	Route::get('cms/tni-au/uo/realisasi-anggaran', 'Backend\TniAUUOController@realisasi_anggaran');
	Route::get('cms/tni-au/uo/realisasi-anggaran-detail', 'Backend\TniAUUOController@realisasi_anggaran_detail');
	Route::get('cms/tni-au/uo/tambah-realisasi-anggaran', 'Backend\TniAUUOController@tambah_realisasi_anggaran');
	//
	Route::get('cms/tni-au/uo/input-anggaran', 'Backend\TniAUUOController@input_anggaran');
	//Laporan
	Route::get('cms/tni-au/uo/laporan-anggaran-belanja-pegawai', 'Backend\TniAUUOController@laporan_pelaksanaan_abp');
	Route::post('cms/tni-au/uo/laporan-rincian-anggaran-belanja-pegawai', 'Backend\TniAUUOController@laporan_rincian_abp');
	Route::get('cms/tni-au/uo/laporan-anggaran-belanja-modal', 'Backend\TniAUUOController@laporan_belanja_modal');
	Route::post('cms/tni-au/uo/laporan-rincian-belanja-modal', 'Backend\TniAUUOController@laporan_rincian_modal');
	Route::get('cms/tni-au/uo/laporan-anggaran-belanja-barang', 'Backend\TniAUUOController@laporan_belanja_barang');
	Route::post('cms/tni-au/uo/laporan-rincian-belanja-barang', 'Backend\TniAUUOController@laporan_rincian_barang');

	//Signout
	Route::get('cms/tni-au/uo/signout', 'Backend\TniAUUOController@signout');

	/* TNI AL */
	Route::get('cms/tni-al/uo/tahun-anggaran', 'Backend\TniALUOController@tahun_anggaran');
	Route::get('cms/tni-al/uo/tahun-anggaran-baru', 'Backend\TniALUOController@tahun_anggaran_baru');
	Route::get('cms/tni-al/uo/tambah-sumber-anggaran', 'Backend\TniALUOController@tambah_sumber_anggaran');
	Route::get('cms/tni-al/uo/tambah-upload-pendapatan', 'Backend\TniALUOController@tambah_upload_pendapatan');
	Route::get('cms/tni-al/uo/buat-anggaran-selesai', 'Backend\TniALUOController@buat_anggaran_selesai');
	Route::get('cms/tni-al/uo/dashboard', 'Backend\TniALUOController@dashboard');
	Route::get('cms/tni-al/uo/anggaran', 'Backend\TniALUOController@anggaran');
	Route::get('cms/tni-al/uo/revisi-anggaran', 'Backend\TniALUOController@revisi_anggaran');
	Route::get('cms/tni-al/uo/edit-semua-revisi-anggaran', 'Backend\TniALUOController@edit_semua_revisi_anggaran');
	Route::get('cms/tni-al/uo/edit-revisi-anggaran', 'Backend\TniALUOController@edit_revisi_anggaran');
	Route::get('cms/tni-al/uo/revisi-anggaran-detail', 'Backend\TniALUOController@revisi_anggaran_detail');
	Route::get('cms/tni-al/uo/rincian-anggaran', 'Backend\TniALUOController@anggaran');
	Route::get('cms/tni-al/uo/rincian-anggaran-detail', 'Backend\TniALUOController@anggaran_detail');
	Route::get('cms/tni-al/uo/realisasi-anggaran', 'Backend\TniALUOController@realisasi_anggaran');
	Route::get('cms/tni-al/uo/realisasi-anggaran-detail', 'Backend\TniALUOController@realisasi_anggaran_detail');
	Route::get('cms/tni-al/uo/tambah-realisasi-anggaran', 'Backend\TniALUOController@tambah_realisasi_anggaran');
	//
	Route::get('cms/tni-al/uo/input-anggaran', 'Backend\TniALUOController@input_anggaran');
	//Laporan
	Route::get('cms/tni-al/uo/laporan-anggaran-belanja-pegawai', 'Backend\TniALUOController@laporan_pelaksanaan_abp');
	Route::post('cms/tni-al/uo/laporan-rincian-anggaran-belanja-pegawai', 'Backend\TniALUOController@laporan_rincian_abp');
	Route::get('cms/tni-al/uo/laporan-anggaran-belanja-modal', 'Backend\TniALUOController@laporan_belanja_modal');
	Route::post('cms/tni-al/uo/laporan-rincian-belanja-modal', 'Backend\TniALUOController@laporan_rincian_modal');
	Route::get('cms/tni-al/uo/laporan-anggaran-belanja-barang', 'Backend\TniALUOController@laporan_belanja_barang');
	Route::post('cms/tni-al/uo/laporan-rincian-belanja-barang', 'Backend\TniALUOController@laporan_rincian_barang');

	//Signout
	Route::get('cms/tni-al/uo/signout', 'Backend\TniALUOController@signout');



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
	Route::get('cms/kotama/revisi-anggaran', 'Backend\KotamaController@revisi_anggaran');
	Route::get('cms/kotama/edit-semua-revisi-anggaran', 'Backend\KotamaController@edit_semua_revisi_anggaran');
	Route::get('cms/kotama/edit-revisi-anggaran', 'Backend\KotamaController@edit_revisi_anggaran');
	Route::get('cms/kotama/revisi-anggaran-detail', 'Backend\KotamaController@revisi_anggaran_detail');
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
	Route::get('cms/satker/revisi-anggaran', 'Backend\SatKerController@revisi_anggaran');
	Route::get('cms/satker/edit-semua-revisi-anggaran', 'Backend\SatKerController@edit_semua_revisi_anggaran');
	Route::get('cms/satker/edit-revisi-anggaran', 'Backend\SatKerController@edit_revisi_anggaran');
	Route::get('cms/satker/revisi-anggaran-detail', 'Backend\SatKerController@revisi_anggaran_detail');
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