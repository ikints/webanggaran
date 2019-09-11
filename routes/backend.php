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

	Route::post('cms/import', 'Backend\AnggaranController@import');

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
	Route::get('cms/edit-realisasi-anggaran', 'Backend\HomeController@edit_realisasi_anggaran');
	//
	Route::get('cms/form-filter-laporan-realisasi-rpd', 'Backend\HomeController@form_filter_laporan_realisasi_rpd');
	Route::post('cms/laporan-realisasi-rpd', 'Backend\HomeController@laporan_realisasi_rpd');
	//
	Route::get('cms/input-anggaran', 'Backend\HomeController@input_anggaran');
	Route::get('cms/tambah-pencairan-dana', 'Backend\HomeController@tambah_pencairan_dana');

	Route::get('cms/rencana-penarikan-dana', 'Backend\HomeController@rencana_penarikan_dana');
	Route::get('cms/edit-rencana-penarikan-dana', 'Backend\HomeController@edit_rencana_penarikan_dana');

	//================================Laporan==================================
	/*
	/* Rincian Laporan
	/*
	*/

	Route::get('cms/form-filter-laporan-perkembangan-pengadaan-barang-dan-jasa', 'Backend\HomeController@form_filter_laporan_perkembangan_pengadaan_barang_dan_jasa');
	Route::post('cms/laporan-perkembangan-pengadaan-barang-dan-jasa', 'Backend\HomeController@laporan_perkembangan_pengadaan_barang_dan_jasa');
	Route::get('cms/form-filter-laporan-perkembangan-pembangunan-dan-pengembangan-fasilitas', 'Backend\HomeController@form_filter_laporan_perkembangan_pembangunan_dan_pengembangan_fasilitas');
	Route::post('cms/laporan-perkembangan-pembangunan-dan-pengembangan-fasilitas', 'Backend\HomeController@laporan_perkembangan_pembangunan_dan_pengembangan_fasilitas');

	Route::get('cms/form-filter-laporan-pelaksanaan-anggaran-belanja-pegawai', 'Backend\HomeController@form_filter_laporan_pelaksanaan_anggaran_belanja_pegawai');
	Route::post('cms/laporan-pelaksanaan-anggaran-belanja-pegawai', 'Backend\HomeController@laporan_pelaksanaan_anggaran_belanja_pegawai');
	Route::get('cms/form-filter-laporan-pelaksanaan-anggaran-belanja-barang', 'Backend\HomeController@form_filter_laporan_pelaksanaan_anggaran_belanja_barang');
	Route::get('cms/laporan-pelaksanaan-anggaran-belanja-barang', 'Backend\HomeController@laporan_pelaksanaan_anggaran_belanja_barang');
	Route::get('cms/form-filter-laporan-pelaksanaan-anggaran-belanja-modal', 'Backend\HomeController@form_filter_laporan_pelaksanaan_anggaran_belanja_modal');
	Route::post('cms/laporan-pelaksanaan-anggaran-belanja-modal', 'Backend\HomeController@laporan_pelaksanaan_anggaran_belanja_modal');
	Route::get('cms/form-filter-laporan-pelaksanaan-barang-dan-jasa', 'Backend\HomeController@form_filter_laporan_pelaksanaan_barang_dan_jasa');
	Route::post('cms/laporan-pelaksanaan-barang-dan-jasa', 'Backend\HomeController@laporan_pelaksanaan_barang_dan_jasa');
	Route::get('cms/form-filter-laporan-pelaksanaan-perkembangan-kegiatan-prioritas', 'Backend\HomeController@form_filter_laporan_pelaksanaan_perkembangan_kegiatan_prioritas');
	Route::post('cms/laporan-pelaksanaan-perkembangan-kegiatan-prioritas', 'Backend\HomeController@laporan_pelaksanaan_perkembangan_kegiatan_prioritas');
	Route::get('cms/form-filter-laporan-pelaksanaan-perkembangan-pembangunan-dan-fasilitas', 'Backend\HomeController@form_filter_laporan_pelaksanaan_perkembangan_pembangunan_dan_fasilitas');
	Route::post('cms/laporan-pelaksanaan-perkembangan-pembangunan-dan-fasilitas', 'Backend\HomeController@laporan_pelaksanaan_perkembangan_pembangunan_dan_fasilitas');
	Route::get('cms/form-filter-laporan-realisasi-pelaksanaan-anggaran-perjenis-belanja', 'Backend\HomeController@form_filter_laporan_realisasi_pelaksanaan_anggaran_perjenis_belanja');
	Route::post('cms/laporan-realisasi-pelaksanaan-anggaran-perjenis-belanja', 'Backend\HomeController@laporan_realisasi_pelaksanaan_anggaran_perjenis_belanja');

	Route::get('cms/form-filter-laporan-penerimaan-hibah-dalam-negeri', 'Backend\HomeController@form_filter_laporan_penerimaan_hibah_dalam_negeri');
	Route::post('cms/laporan-penerimaan-hibah-dalam-negeri', 'Backend\HomeController@laporan_penerimaan_hibah_dalam_negeri');

	Route::get('cms/form-filter-laporan-pendapatan-negara', 'Backend\HomeController@form_filter_laporan_pendapatan_negara');
	Route::post('cms/laporan-pendapatan-negara', 'Backend\HomeController@laporan_pendapatan_negara');
	Route::get('cms/form-filter-laporan-anggaran-pemeliharaan', 'Backend\HomeController@form_filter_laporan_anggaran_pemeliharaan');
	Route::post('cms/laporan-anggaran-pemeliharaan', 'Backend\HomeController@laporan_anggaran_pemeliharaan');
	Route::get('cms/form-filter-laporan-anggaran-alutsista', 'Backend\HomeController@form_filter_laporan_anggaran_alutsista');
	Route::post('cms/laporan-anggaran-alutsista', 'Backend\HomeController@laporan_anggaran_alutsista');
	Route::get('cms/form-filter-laporan-anggaran-mef', 'Backend\HomeController@form_filter_laporan_anggaran_mef');
	Route::post('cms/laporan-anggaran-mef', 'Backend\HomeController@laporan_anggaran_mef');
	Route::get('cms/form-filter-laporan-anggaran-perbatasan', 'Backend\HomeController@form_filter_laporan_anggaran_perbatasan');
	Route::post('cms/laporan-anggaran-perbatasan', 'Backend\HomeController@laporan_anggaran_perbatasan');
	Route::get('cms/form-filter-laporan-anggaran-pinjaman', 'Backend\HomeController@form_filter_laporan_anggaran_pinjaman');
	Route::post('cms/laporan-anggaran-pinjaman', 'Backend\HomeController@laporan_anggaran_pinjaman');
	Route::get('cms/form-filter-laporan-anggaran-prioritas', 'Backend\HomeController@form_filter_laporan_anggaran_prioritas');
	Route::post('cms/laporan-anggaran-prioritas', 'Backend\HomeController@laporan_anggaran_prioritas');

	Route::get('cms/form-filter-laporan-realisasi-anggaran', 'Backend\HomeController@form_filter_laporan_realisasi_anggaran');
	Route::post('cms/laporan-realisasi-anggaran', 'Backend\HomeController@laporan_realisasi_anggaran');
	Route::get('cms/form-filter-laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i-menurut-wilayah-satuan-kerja', 'Backend\HomeController@form_filter_laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i_menurut_wilayah_satuan_kerja');
	Route::post('cms/laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i-menurut-wilayah-satuan-kerja', 'Backend\HomeController@laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i_menurut_wilayah_satuan_kerja');
	Route::get('cms/form-filter-laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i', 'Backend\HomeController@form_filter_laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i');
	Route::post('cms/laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i', 'Backend\HomeController@laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i');
	Route::get('cms/form-filter-laporan-realisasi-anggaran-belanja-menurut-wilayah-satuan-kerja-tingkat-eselon-i', 'Backend\HomeController@form_filter_laporan_realisasi_anggaran_belanja_menurut_wilayah_satuan_kerja_tingkat_eselon_i');
	Route::post('cms/laporan-realisasi-anggaran-belanja-menurut-wilayah-satuan-kerja-tingkat-eselon-i', 'Backend\HomeController@laporan_realisasi_anggaran_belanja_menurut_wilayah_satuan_kerja_tingkat_eselon_i');
	Route::get('cms/form-filter-laporan-realisasi-anggaran-belanja-menurut-jenis-belanja-akun-tingkat-eselon-i', 'Backend\HomeController@form_filter_laporan_realisasi_anggaran_belanja_menurut_jenis_belanja_akun_tingkat_eselon_i');
	Route::post('cms/laporan-realisasi-anggaran-belanja-menurut-jenis-belanja-akun-tingkat-eselon-i', 'Backend\HomeController@laporan_realisasi_anggaran_belanja_menurut_jenis_belanja_akun_tingkat_eselon_i');
	Route::get('cms/form-filter-laporan-realisasi-anggaran-belanja-menurut-sumber-dana-program-kegiatan-tingkat-eselon-i', 'Backend\HomeController@form_filter_laporan_realisasi_anggaran_belanja_menurut_sumber_dana_program_kegiatan_tingkat_eselon_i');
	Route::post('cms/laporan-realisasi-anggaran-belanja-menurut-sumber-dana-program-kegiatan-tingkat-eselon-i', 'Backend\HomeController@laporan_realisasi_anggaran_belanja_menurut_sumber_dana_program_kegiatan_tingkat_eselon_i');

	//===============================End Laporan===============================

	//Signout
	Route::get('cms/signout', 'Backend\HomeController@signout');

});

Route::group(['middleware' => 'ValidateUO'], function () {

	/* Kemhan UO */

	

	/* ==========Anggaran========== */
	Route::get('cms/kemhan/uo/anggaran', 'Backend\KemhanUOController@anggaran');
	Route::get('cms/kemhan/uo/input-anggaran', 'Backend\KemhanUOController@input_anggaran');
	Route::get('cms/kemhan/uo/rincian-anggaran', 'Backend\KemhanUOController@anggaran');
	Route::get('cms/kemhan/uo/rincian-anggaran-detail', 'Backend\KemhanUOController@anggaran_detail');
	Route::get('cms/kemhan/uo/tambah-pencairan-dana', 'Backend\KemhanUOController@tambah_pencairan_dana');
	Route::get('cms/kemhan/uo/rencana-penarikan-dana', 'Backend\KemhanUOController@rencana_penarikan_dana');
	Route::get('cms/kemhan/uo/edit-rencana-penarikan-dana', 'Backend\KemhanUOController@edit_rencana_penarikan_dana');
	//


	///=======================================Laporan

	/* ==========Laporan Perkembangan========== */
	Route::get('cms/kemhan/uo/form-filter-laporan-perkembangan-pengadaan-barang-dan-jasa', 'Backend\KemhanUOController@form_filter_laporan_perkembangan_pengadaan_barang_dan_jasa');
	Route::post('cms/kemhan/uo/laporan-perkembangan-pengadaan-barang-dan-jasa', 'Backend\KemhanUOController@laporan_perkembangan_pengadaan_barang_dan_jasa');
	Route::get('cms/kemhan/uo/form-filter-laporan-perkembangan-pembangunan-dan-pengembangan-fasilitas', 'Backend\KemhanUOController@form_filter_laporan_perkembangan_pembangunan_dan_pengembangan_fasilitas');
	Route::post('cms/kemhan/uo/laporan-perkembangan-pembangunan-dan-pengembangan-fasilitas', 'Backend\KemhanUOController@laporan_perkembangan_pembangunan_dan_pengembangan_fasilitas');

	/* ==========Laporan Pelaksanaan========== */
	Route::get('cms/kemhan/uo/form-filter-laporan-pelaksanaan-anggaran-belanja-pegawai', 'Backend\KemhanUOController@form_filter_laporan_pelaksanaan_anggaran_belanja_pegawai');
	Route::post('cms/kemhan/uo/laporan-pelaksanaan-anggaran-belanja-pegawai', 'Backend\KemhanUOController@laporan_pelaksanaan_anggaran_belanja_pegawai');
	Route::get('cms/kemhan/uo/form-filter-laporan-pelaksanaan-anggaran-belanja-barang', 'Backend\KemhanUOController@form_filter_laporan_pelaksanaan_anggaran_belanja_barang');
	Route::get('cms/kemhan/uo/laporan-pelaksanaan-anggaran-belanja-barang', 'Backend\KemhanUOController@laporan_pelaksanaan_anggaran_belanja_barang');
	Route::get('cms/kemhan/uo/form-filter-laporan-pelaksanaan-anggaran-belanja-modal', 'Backend\KemhanUOController@form_filter_laporan_pelaksanaan_anggaran_belanja_modal');
	Route::post('cms/kemhan/uo/laporan-pelaksanaan-anggaran-belanja-modal', 'Backend\KemhanUOController@laporan_pelaksanaan_anggaran_belanja_modal');
	Route::get('cms/kemhan/uo/form-filter-laporan-pelaksanaan-barang-dan-jasa', 'Backend\KemhanUOController@form_filter_laporan_pelaksanaan_barang_dan_jasa');
	Route::post('cms/kemhan/uo/laporan-pelaksanaan-barang-dan-jasa', 'Backend\KemhanUOController@laporan_pelaksanaan_barang_dan_jasa');
	Route::get('cms/kemhan/uo/form-filter-laporan-pelaksanaan-perkembangan-kegiatan-prioritas', 'Backend\KemhanUOController@form_filter_laporan_pelaksanaan_perkembangan_kegiatan_prioritas');
	Route::post('cms/kemhan/uo/laporan-pelaksanaan-perkembangan-kegiatan-prioritas', 'Backend\KemhanUOController@laporan_pelaksanaan_perkembangan_kegiatan_prioritas');
	Route::get('cms/kemhan/uo/form-filter-laporan-pelaksanaan-perkembangan-pembangunan-dan-fasilitas', 'Backend\KemhanUOController@form_filter_laporan_pelaksanaan_perkembangan_pembangunan_dan_fasilitas');
	Route::post('cms/kemhan/uo/laporan-pelaksanaan-perkembangan-pembangunan-dan-fasilitas', 'Backend\KemhanUOController@laporan_pelaksanaan_perkembangan_pembangunan_dan_fasilitas');
	Route::get('cms/kemhan/uo/form-filter-laporan-realisasi-pelaksanaan-anggaran-perjenis-belanja', 'Backend\KemhanUOController@form_filter_laporan_realisasi_pelaksanaan_anggaran_perjenis_belanja');
	Route::post('cms/kemhan/uo/laporan-realisasi-pelaksanaan-anggaran-perjenis-belanja', 'Backend\KemhanUOController@laporan_realisasi_pelaksanaan_anggaran_perjenis_belanja');

	/* ==========Hibah========== */
	Route::get('cms/kemhan/uo/form-filter-laporan-penerimaan-hibah-dalam-negeri', 'Backend\KemhanUOController@form_filter_laporan_penerimaan_hibah_dalam_negeri');
	Route::post('cms/kemhan/uo/laporan-penerimaan-hibah-dalam-negeri', 'Backend\KemhanUOController@laporan_penerimaan_hibah_dalam_negeri');

	/* ==========Pendapatan========== */
	Route::get('cms/kemhan/uo/form-filter-laporan-pendapatan-negara', 'Backend\KemhanUOController@form_filter_laporan_pendapatan_negara');
	Route::post('cms/kemhan/uo/laporan-pendapatan-negara', 'Backend\KemhanUOController@laporan_pendapatan_negara');
	Route::get('cms/kemhan/uo/form-filter-laporan-anggaran-pemeliharaan', 'Backend\KemhanUOController@form_filter_laporan_anggaran_pemeliharaan');
	Route::post('cms/kemhan/uo/laporan-anggaran-pemeliharaan', 'Backend\KemhanUOController@laporan_anggaran_pemeliharaan');
	Route::get('cms/kemhan/uo/form-filter-laporan-anggaran-alutsista', 'Backend\KemhanUOController@form_filter_laporan_anggaran_alutsista');
	Route::post('cms/kemhan/uo/laporan-anggaran-alutsista', 'Backend\KemhanUOController@laporan_anggaran_alutsista');
	Route::get('cms/kemhan/uo/form-filter-laporan-anggaran-mef', 'Backend\KemhanUOController@form_filter_laporan_anggaran_mef');
	Route::post('cms/kemhan/uo/laporan-anggaran-mef', 'Backend\KemhanUOController@laporan_anggaran_mef');
	Route::get('cms/kemhan/uo/form-filter-laporan-anggaran-perbatasan', 'Backend\KemhanUOController@form_filter_laporan_anggaran_perbatasan');
	Route::post('cms/kemhan/uo/laporan-anggaran-perbatasan', 'Backend\KemhanUOController@laporan_anggaran_perbatasan');
	Route::get('cms/kemhan/uo/form-filter-laporan-anggaran-pinjaman', 'Backend\KemhanUOController@form_filter_laporan_anggaran_pinjaman');
	Route::post('cms/kemhan/uo/laporan-anggaran-pinjaman', 'Backend\KemhanUOController@laporan_anggaran_pinjaman');
	Route::get('cms/kemhan/uo/form-filter-laporan-anggaran-prioritas', 'Backend\KemhanUOController@form_filter_laporan_anggaran_prioritas');
	Route::post('cms/kemhan/uo/laporan-anggaran-prioritas', 'Backend\KemhanUOController@laporan_anggaran_prioritas');

	Route::get('cms/kemhan/uo/form-filter-laporan-realisasi-anggaran', 'Backend\KemhanUOController@form_filter_laporan_realisasi_anggaran');
	Route::post('cms/kemhan/uo/laporan-realisasi-anggaran', 'Backend\KemhanUOController@laporan_realisasi_anggaran');
	Route::get('cms/kemhan/uo/form-filter-laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i-menurut-wilayah-satuan-kerja', 'Backend\KemhanUOController@form_filter_laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i_menurut_wilayah_satuan_kerja');
	Route::post('cms/kemhan/uo/laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i-menurut-wilayah-satuan-kerja', 'Backend\KemhanUOController@laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i_menurut_wilayah_satuan_kerja');
	Route::get('cms/kemhan/uo/form-filter-laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i', 'Backend\KemhanUOController@form_filter_laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i');
	Route::post('cms/kemhan/uo/laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i', 'Backend\KemhanUOController@laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i');
	Route::get('cms/kemhan/uo/form-filter-laporan-realisasi-anggaran-belanja-menurut-wilayah-satuan-kerja-tingkat-eselon-i', 'Backend\KemhanUOController@form_filter_laporan_realisasi_anggaran_belanja_menurut_wilayah_satuan_kerja_tingkat_eselon_i');
	Route::post('cms/kemhan/uo/laporan-realisasi-anggaran-belanja-menurut-wilayah-satuan-kerja-tingkat-eselon-i', 'Backend\KemhanUOController@laporan_realisasi_anggaran_belanja_menurut_wilayah_satuan_kerja_tingkat_eselon_i');
	Route::get('cms/kemhan/uo/form-filter-laporan-realisasi-anggaran-belanja-menurut-jenis-belanja-akun-tingkat-eselon-i', 'Backend\KemhanUOController@form_filter_laporan_realisasi_anggaran_belanja_menurut_jenis_belanja_akun_tingkat_eselon_i');
	Route::post('cms/kemhan/uo/laporan-realisasi-anggaran-belanja-menurut-jenis-belanja-akun-tingkat-eselon-i', 'Backend\KemhanUOController@laporan_realisasi_anggaran_belanja_menurut_jenis_belanja_akun_tingkat_eselon_i');
	Route::get('cms/kemhan/uo/form-filter-laporan-realisasi-anggaran-belanja-menurut-sumber-dana-program-kegiatan-tingkat-eselon-i', 'Backend\KemhanUOController@form_filter_laporan_realisasi_anggaran_belanja_menurut_sumber_dana_program_kegiatan_tingkat_eselon_i');
	Route::post('cms/kemhan/uo/laporan-realisasi-anggaran-belanja-menurut-sumber-dana-program-kegiatan-tingkat-eselon-i', 'Backend\KemhanUOController@laporan_realisasi_anggaran_belanja_menurut_sumber_dana_program_kegiatan_tingkat_eselon_i');

	//---------------------------------------------------------------------
    Route::get('cms/kemhan/uo/tahun-anggaran', 'Backend\KemhanUOController@tahun_anggaran');
	Route::get('cms/kemhan/uo/tahun-anggaran-baru', 'Backend\KemhanUOController@tahun_anggaran_baru');
	Route::get('cms/kemhan/uo/tambah-sumber-anggaran', 'Backend\KemhanUOController@tambah_sumber_anggaran');
	Route::get('cms/kemhan/uo/tambah-upload-pendapatan', 'Backend\KemhanUOController@tambah_upload_pendapatan');
	Route::get('cms/kemhan/uo/buat-anggaran-selesai', 'Backend\KemhanUOController@buat_anggaran_selesai');
	Route::get('cms/kemhan/uo/dashboard', 'Backend\KemhanUOController@dashboard');
	Route::get('cms/kemhan/uo/revisi-anggaran', 'Backend\KemhanUOController@revisi_anggaran');
	Route::get('cms/kemhan/uo/edit-semua-revisi-anggaran', 'Backend\KemhanUOController@edit_semua_revisi_anggaran');
	Route::get('cms/kemhan/uo/edit-revisi-anggaran', 'Backend\KemhanUOController@edit_revisi_anggaran');
	Route::get('cms/kemhan/uo/revisi-anggaran-detail', 'Backend\KemhanUOController@revisi_anggaran_detail');
	Route::get('cms/kemhan/uo/realisasi-anggaran', 'Backend\KemhanUOController@realisasi_anggaran');
	Route::get('cms/kemhan/uo/realisasi-anggaran-detail', 'Backend\KemhanUOController@realisasi_anggaran_detail');
	Route::get('cms/kemhan/uo/tambah-realisasi-anggaran', 'Backend\KemhanUOController@tambah_realisasi_anggaran');
	Route::get('cms/kemhan/uo/edit-realisasi-anggaran', 'Backend\KemhanUOController@edit_realisasi_anggaran');

	Route::get('cms/kemhan/uo/form-filter-laporan-realisasi-rpd', 'Backend\KemhanUOController@form_filter_laporan_realisasi_rpd');
	Route::post('cms/kemhan/uo/laporan-realisasi-rpd', 'Backend\KemhanUOController@laporan_realisasi_rpd');

	//Signout
	Route::get('cms/kemhan/uo/signout', 'Backend\KemhanUOController@signout');

	/* Mabes TNI */
	///=======================================Laporan

	/* ==========Laporan Perkembangan========== */
	Route::get('cms/mabes-tni/uo/form-filter-laporan-perkembangan-pengadaan-barang-dan-jasa', 'Backend\MabesTniUOController@form_filter_laporan_perkembangan_pengadaan_barang_dan_jasa');
	Route::post('cms/mabes-tni/uo/laporan-perkembangan-pengadaan-barang-dan-jasa', 'Backend\MabesTniUOController@laporan_perkembangan_pengadaan_barang_dan_jasa');
	Route::get('cms/mabes-tni/uo/form-filter-laporan-perkembangan-pembangunan-dan-pengembangan-fasilitas', 'Backend\MabesTniUOController@form_filter_laporan_perkembangan_pembangunan_dan_pengembangan_fasilitas');
	Route::post('cms/mabes-tni/uo/laporan-perkembangan-pembangunan-dan-pengembangan-fasilitas', 'Backend\MabesTniUOController@laporan_perkembangan_pembangunan_dan_pengembangan_fasilitas');

	/* ==========Laporan Pelaksanaan========== */
	Route::get('cms/mabes-tni/uo/form-filter-laporan-pelaksanaan-anggaran-belanja-pegawai', 'Backend\MabesTniUOController@form_filter_laporan_pelaksanaan_anggaran_belanja_pegawai');
	Route::post('cms/mabes-tni/uo/laporan-pelaksanaan-anggaran-belanja-pegawai', 'Backend\MabesTniUOController@laporan_pelaksanaan_anggaran_belanja_pegawai');
	Route::get('cms/mabes-tni/uo/form-filter-laporan-pelaksanaan-anggaran-belanja-barang', 'Backend\MabesTniUOController@form_filter_laporan_pelaksanaan_anggaran_belanja_barang');
	Route::get('cms/mabes-tni/uo/laporan-pelaksanaan-anggaran-belanja-barang', 'Backend\MabesTniUOController@laporan_pelaksanaan_anggaran_belanja_barang');
	Route::get('cms/mabes-tni/uo/form-filter-laporan-pelaksanaan-anggaran-belanja-modal', 'Backend\MabesTniUOController@form_filter_laporan_pelaksanaan_anggaran_belanja_modal');
	Route::post('cms/mabes-tni/uo/laporan-pelaksanaan-anggaran-belanja-modal', 'Backend\MabesTniUOController@laporan_pelaksanaan_anggaran_belanja_modal');
	Route::get('cms/mabes-tni/uo/form-filter-laporan-pelaksanaan-barang-dan-jasa', 'Backend\MabesTniUOController@form_filter_laporan_pelaksanaan_barang_dan_jasa');
	Route::post('cms/mabes-tni/uo/laporan-pelaksanaan-barang-dan-jasa', 'Backend\MabesTniUOController@laporan_pelaksanaan_barang_dan_jasa');
	Route::get('cms/mabes-tni/uo/form-filter-laporan-pelaksanaan-perkembangan-kegiatan-prioritas', 'Backend\MabesTniUOController@form_filter_laporan_pelaksanaan_perkembangan_kegiatan_prioritas');
	Route::post('cms/mabes-tni/uo/laporan-pelaksanaan-perkembangan-kegiatan-prioritas', 'Backend\MabesTniUOController@laporan_pelaksanaan_perkembangan_kegiatan_prioritas');
	Route::get('cms/mabes-tni/uo/form-filter-laporan-pelaksanaan-perkembangan-pembangunan-dan-fasilitas', 'Backend\MabesTniUOController@form_filter_laporan_pelaksanaan_perkembangan_pembangunan_dan_fasilitas');
	Route::post('cms/mabes-tni/uo/laporan-pelaksanaan-perkembangan-pembangunan-dan-fasilitas', 'Backend\MabesTniUOController@laporan_pelaksanaan_perkembangan_pembangunan_dan_fasilitas');
	Route::get('cms/mabes-tni/uo/form-filter-laporan-realisasi-pelaksanaan-anggaran-perjenis-belanja', 'Backend\MabesTniUOController@form_filter_laporan_realisasi_pelaksanaan_anggaran_perjenis_belanja');
	Route::post('cms/mabes-tni/uo/laporan-realisasi-pelaksanaan-anggaran-perjenis-belanja', 'Backend\MabesTniUOController@laporan_realisasi_pelaksanaan_anggaran_perjenis_belanja');

	/* ==========Hibah========== */
	Route::get('cms/mabes-tni/uo/form-filter-laporan-penerimaan-hibah-dalam-negeri', 'Backend\MabesTniUOController@form_filter_laporan_penerimaan_hibah_dalam_negeri');
	Route::post('cms/mabes-tni/uo/laporan-penerimaan-hibah-dalam-negeri', 'Backend\MabesTniUOController@laporan_penerimaan_hibah_dalam_negeri');

	/* ==========Pendapatan========== */
	Route::get('cms/mabes-tni/uo/form-filter-laporan-pendapatan-negara', 'Backend\MabesTniUOController@form_filter_laporan_pendapatan_negara');
	Route::post('cms/mabes-tni/uo/laporan-pendapatan-negara', 'Backend\MabesTniUOController@laporan_pendapatan_negara');
	Route::get('cms/mabes-tni/uo/form-filter-laporan-anggaran-pemeliharaan', 'Backend\MabesTniUOController@form_filter_laporan_anggaran_pemeliharaan');
	Route::post('cms/mabes-tni/uo/laporan-anggaran-pemeliharaan', 'Backend\MabesTniUOController@laporan_anggaran_pemeliharaan');
	Route::get('cms/mabes-tni/uo/form-filter-laporan-anggaran-alutsista', 'Backend\MabesTniUOController@form_filter_laporan_anggaran_alutsista');
	Route::post('cms/mabes-tni/uo/laporan-anggaran-alutsista', 'Backend\MabesTniUOController@laporan_anggaran_alutsista');
	Route::get('cms/mabes-tni/uo/form-filter-laporan-anggaran-mef', 'Backend\MabesTniUOController@form_filter_laporan_anggaran_mef');
	Route::post('cms/mabes-tni/uo/laporan-anggaran-mef', 'Backend\MabesTniUOController@laporan_anggaran_mef');
	Route::get('cms/mabes-tni/uo/form-filter-laporan-anggaran-perbatasan', 'Backend\MabesTniUOController@form_filter_laporan_anggaran_perbatasan');
	Route::post('cms/mabes-tni/uo/laporan-anggaran-perbatasan', 'Backend\MabesTniUOController@laporan_anggaran_perbatasan');
	Route::get('cms/mabes-tni/uo/form-filter-laporan-anggaran-pinjaman', 'Backend\MabesTniUOController@form_filter_laporan_anggaran_pinjaman');
	Route::post('cms/mabes-tni/uo/laporan-anggaran-pinjaman', 'Backend\MabesTniUOController@laporan_anggaran_pinjaman');
	Route::get('cms/mabes-tni/uo/form-filter-laporan-anggaran-prioritas', 'Backend\MabesTniUOController@form_filter_laporan_anggaran_prioritas');
	Route::post('cms/mabes-tni/uo/laporan-anggaran-prioritas', 'Backend\MabesTniUOController@laporan_anggaran_prioritas');

	Route::get('cms/mabes-tni/uo/form-filter-laporan-realisasi-anggaran', 'Backend\MabesTniUOController@form_filter_laporan_realisasi_anggaran');
	Route::post('cms/mabes-tni/uo/laporan-realisasi-anggaran', 'Backend\MabesTniUOController@laporan_realisasi_anggaran');
	Route::get('cms/mabes-tni/uo/form-filter-laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i-menurut-wilayah-satuan-kerja', 'Backend\MabesTniUOController@form_filter_laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i_menurut_wilayah_satuan_kerja');
	Route::post('cms/mabes-tni/uo/laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i-menurut-wilayah-satuan-kerja', 'Backend\MabesTniUOController@laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i_menurut_wilayah_satuan_kerja');
	Route::get('cms/mabes-tni/uo/form-filter-laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i', 'Backend\MabesTniUOController@form_filter_laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i');
	Route::post('cms/mabes-tni/uo/laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i', 'Backend\MabesTniUOController@laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i');
	Route::get('cms/mabes-tni/uo/form-filter-laporan-realisasi-anggaran-belanja-menurut-wilayah-satuan-kerja-tingkat-eselon-i', 'Backend\MabesTniUOController@form_filter_laporan_realisasi_anggaran_belanja_menurut_wilayah_satuan_kerja_tingkat_eselon_i');
	Route::post('cms/mabes-tni/uo/laporan-realisasi-anggaran-belanja-menurut-wilayah-satuan-kerja-tingkat-eselon-i', 'Backend\MabesTniUOController@laporan_realisasi_anggaran_belanja_menurut_wilayah_satuan_kerja_tingkat_eselon_i');
	Route::get('cms/mabes-tni/uo/form-filter-laporan-realisasi-anggaran-belanja-menurut-jenis-belanja-akun-tingkat-eselon-i', 'Backend\MabesTniUOController@form_filter_laporan_realisasi_anggaran_belanja_menurut_jenis_belanja_akun_tingkat_eselon_i');
	Route::post('cms/mabes-tni/uo/laporan-realisasi-anggaran-belanja-menurut-jenis-belanja-akun-tingkat-eselon-i', 'Backend\MabesTniUOController@laporan_realisasi_anggaran_belanja_menurut_jenis_belanja_akun_tingkat_eselon_i');
	Route::get('cms/mabes-tni/uo/form-filter-laporan-realisasi-anggaran-belanja-menurut-sumber-dana-program-kegiatan-tingkat-eselon-i', 'Backend\MabesTniUOController@form_filter_laporan_realisasi_anggaran_belanja_menurut_sumber_dana_program_kegiatan_tingkat_eselon_i');
	Route::post('cms/mabes-tni/uo/laporan-realisasi-anggaran-belanja-menurut-sumber-dana-program-kegiatan-tingkat-eselon-i', 'Backend\MabesTniUOController@laporan_realisasi_anggaran_belanja_menurut_sumber_dana_program_kegiatan_tingkat_eselon_i');


	//----------------------------------------------------------------------------------------
	Route::get('cms/mabes-tni/uo/tahun-anggaran', 'Backend\MabesTniUOController@tahun_anggaran');
	Route::get('cms/mabes-tni/uo/tahun-anggaran-baru', 'Backend\MabesTniUOController@tahun_anggaran_baru');
	Route::get('cms/mabes-tni/uo/tambah-sumber-anggaran', 'Backend\MabesTniUOController@tambah_sumber_anggaran');
	Route::get('cms/mabes-tni/uo/tambah-upload-pendapatan', 'Backend\MabesTniUOController@tambah_upload_pendapatan');
	Route::get('cms/mabes-tni/uo/rencana-penarikan-dana', 'Backend\MabesTniUOController@rencana_penarikan_dana');
	Route::get('cms/mabes-tni/uo/edit-rencana-penarikan-dana', 'Backend\MabesTniUOController@edit_rencana_penarikan_dana');

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
	Route::get('cms/mabes-tni/uo/edit-realisasi-anggaran', 'Backend\MabesTniUOController@edit_realisasi_anggaran');

	Route::get('cms/mabes-tni/uo/tambah-pencairan-dana', 'Backend\MabesTniUOController@tambah_pencairan_dana');
	//
	Route::get('cms/mabes-tni/uo/input-anggaran', 'Backend\MabesTniUOController@input_anggaran');
	//Laporan
	Route::get('cms/mabes-tni/uo/laporan-anggaran-belanja-pegawai', 'Backend\MabesTniUOController@laporan_pelaksanaan_abp');
	Route::post('cms/mabes-tni/uo/laporan-rincian-anggaran-belanja-pegawai', 'Backend\MabesTniUOController@laporan_rincian_abp');
	Route::get('cms/mabes-tni/uo/laporan-anggaran-belanja-modal', 'Backend\MabesTniUOController@laporan_belanja_modal');
	Route::post('cms/mabes-tni/uo/laporan-rincian-belanja-modal', 'Backend\MabesTniUOController@laporan_rincian_modal');
	Route::get('cms/mabes-tni/uo/laporan-anggaran-belanja-barang', 'Backend\MabesTniUOController@laporan_belanja_barang');
	Route::post('cms/mabes-tni/uo/laporan-rincian-belanja-barang', 'Backend\MabesTniUOController@laporan_rincian_barang');

	Route::get('cms/mabes-tni/uo/form-filter-laporan-realisasi-rpd', 'Backend\MabesTniUOController@form_filter_laporan_realisasi_rpd');
	Route::post('cms/mabes-tni/uo/laporan-realisasi-rpd', 'Backend\MabesTniUOController@laporan_realisasi_rpd');

	//Signout
	Route::get('cms/mabes-tni/uo/signout', 'Backend\MabesTniUOController@signout');

	/* TNI AD */
	///=======================================Laporan

	/* ==========Laporan Perkembangan========== */
	Route::get('cms/tni-ad/uo/form-filter-laporan-perkembangan-pengadaan-barang-dan-jasa', 'Backend\TniADUOController@form_filter_laporan_perkembangan_pengadaan_barang_dan_jasa');
	Route::post('cms/tni-ad/uo/laporan-perkembangan-pengadaan-barang-dan-jasa', 'Backend\TniADUOController@laporan_perkembangan_pengadaan_barang_dan_jasa');
	Route::get('cms/tni-ad/uo/form-filter-laporan-perkembangan-pembangunan-dan-pengembangan-fasilitas', 'Backend\TniADUOController@form_filter_laporan_perkembangan_pembangunan_dan_pengembangan_fasilitas');
	Route::post('cms/tni-ad/uo/laporan-perkembangan-pembangunan-dan-pengembangan-fasilitas', 'Backend\TniADUOController@laporan_perkembangan_pembangunan_dan_pengembangan_fasilitas');

	/* ==========Laporan Pelaksanaan========== */
	Route::get('cms/tni-ad/uo/form-filter-laporan-pelaksanaan-anggaran-belanja-pegawai', 'Backend\TniADUOController@form_filter_laporan_pelaksanaan_anggaran_belanja_pegawai');
	Route::post('cms/tni-ad/uo/laporan-pelaksanaan-anggaran-belanja-pegawai', 'Backend\TniADUOController@laporan_pelaksanaan_anggaran_belanja_pegawai');
	Route::get('cms/tni-ad/uo/form-filter-laporan-pelaksanaan-anggaran-belanja-barang', 'Backend\TniADUOController@form_filter_laporan_pelaksanaan_anggaran_belanja_barang');
	Route::get('cms/tni-ad/uo/laporan-pelaksanaan-anggaran-belanja-barang', 'Backend\TniADUOController@laporan_pelaksanaan_anggaran_belanja_barang');
	Route::get('cms/tni-ad/uo/form-filter-laporan-pelaksanaan-anggaran-belanja-modal', 'Backend\TniADUOController@form_filter_laporan_pelaksanaan_anggaran_belanja_modal');
	Route::post('cms/tni-ad/uo/laporan-pelaksanaan-anggaran-belanja-modal', 'Backend\TniADUOController@laporan_pelaksanaan_anggaran_belanja_modal');
	Route::get('cms/tni-ad/uo/form-filter-laporan-pelaksanaan-barang-dan-jasa', 'Backend\TniADUOController@form_filter_laporan_pelaksanaan_barang_dan_jasa');
	Route::post('cms/tni-ad/uo/laporan-pelaksanaan-barang-dan-jasa', 'Backend\TniADUOController@laporan_pelaksanaan_barang_dan_jasa');
	Route::get('cms/tni-ad/uo/form-filter-laporan-pelaksanaan-perkembangan-kegiatan-prioritas', 'Backend\TniADUOController@form_filter_laporan_pelaksanaan_perkembangan_kegiatan_prioritas');
	Route::post('cms/tni-ad/uo/laporan-pelaksanaan-perkembangan-kegiatan-prioritas', 'Backend\TniADUOController@laporan_pelaksanaan_perkembangan_kegiatan_prioritas');
	Route::get('cms/tni-ad/uo/form-filter-laporan-pelaksanaan-perkembangan-pembangunan-dan-fasilitas', 'Backend\TniADUOController@form_filter_laporan_pelaksanaan_perkembangan_pembangunan_dan_fasilitas');
	Route::post('cms/tni-ad/uo/laporan-pelaksanaan-perkembangan-pembangunan-dan-fasilitas', 'Backend\TniADUOController@laporan_pelaksanaan_perkembangan_pembangunan_dan_fasilitas');
	Route::get('cms/tni-ad/uo/form-filter-laporan-realisasi-pelaksanaan-anggaran-perjenis-belanja', 'Backend\TniADUOController@form_filter_laporan_realisasi_pelaksanaan_anggaran_perjenis_belanja');
	Route::post('cms/tni-ad/uo/laporan-realisasi-pelaksanaan-anggaran-perjenis-belanja', 'Backend\TniADUOController@laporan_realisasi_pelaksanaan_anggaran_perjenis_belanja');

	/* ==========Hibah========== */
	Route::get('cms/tni-ad/uo/form-filter-laporan-penerimaan-hibah-dalam-negeri', 'Backend\TniADUOController@form_filter_laporan_penerimaan_hibah_dalam_negeri');
	Route::post('cms/tni-ad/uo/laporan-penerimaan-hibah-dalam-negeri', 'Backend\TniADUOController@laporan_penerimaan_hibah_dalam_negeri');

	/* ==========Pendapatan========== */
	Route::get('cms/tni-ad/uo/form-filter-laporan-pendapatan-negara', 'Backend\TniADUOController@form_filter_laporan_pendapatan_negara');
	Route::post('cms/tni-ad/uo/laporan-pendapatan-negara', 'Backend\TniADUOController@laporan_pendapatan_negara');
	Route::get('cms/tni-ad/uo/form-filter-laporan-anggaran-pemeliharaan', 'Backend\TniADUOController@form_filter_laporan_anggaran_pemeliharaan');
	Route::post('cms/tni-ad/uo/laporan-anggaran-pemeliharaan', 'Backend\TniADUOController@laporan_anggaran_pemeliharaan');
	Route::get('cms/tni-ad/uo/form-filter-laporan-anggaran-alutsista', 'Backend\TniADUOController@form_filter_laporan_anggaran_alutsista');
	Route::post('cms/tni-ad/uo/laporan-anggaran-alutsista', 'Backend\TniADUOController@laporan_anggaran_alutsista');
	Route::get('cms/tni-ad/uo/form-filter-laporan-anggaran-mef', 'Backend\TniADUOController@form_filter_laporan_anggaran_mef');
	Route::post('cms/tni-ad/uo/laporan-anggaran-mef', 'Backend\TniADUOController@laporan_anggaran_mef');
	Route::get('cms/tni-ad/uo/form-filter-laporan-anggaran-perbatasan', 'Backend\TniADUOController@form_filter_laporan_anggaran_perbatasan');
	Route::post('cms/tni-ad/uo/laporan-anggaran-perbatasan', 'Backend\TniADUOController@laporan_anggaran_perbatasan');
	Route::get('cms/tni-ad/uo/form-filter-laporan-anggaran-pinjaman', 'Backend\TniADUOController@form_filter_laporan_anggaran_pinjaman');
	Route::post('cms/tni-ad/uo/laporan-anggaran-pinjaman', 'Backend\TniADUOController@laporan_anggaran_pinjaman');
	Route::get('cms/tni-ad/uo/form-filter-laporan-anggaran-prioritas', 'Backend\TniADUOController@form_filter_laporan_anggaran_prioritas');
	Route::post('cms/tni-ad/uo/laporan-anggaran-prioritas', 'Backend\TniADUOController@laporan_anggaran_prioritas');

	Route::get('cms/tni-ad/uo/form-filter-laporan-realisasi-anggaran', 'Backend\TniADUOController@form_filter_laporan_realisasi_anggaran');
	Route::post('cms/tni-ad/uo/laporan-realisasi-anggaran', 'Backend\TniADUOController@laporan_realisasi_anggaran');
	Route::get('cms/tni-ad/uo/form-filter-laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i-menurut-wilayah-satuan-kerja', 'Backend\TniADUOController@form_filter_laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i_menurut_wilayah_satuan_kerja');
	Route::post('cms/tni-ad/uo/laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i-menurut-wilayah-satuan-kerja', 'Backend\TniADUOController@laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i_menurut_wilayah_satuan_kerja');
	Route::get('cms/tni-ad/uo/form-filter-laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i', 'Backend\TniADUOController@form_filter_laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i');
	Route::post('cms/tni-ad/uo/laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i', 'Backend\TniADUOController@laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i');
	Route::get('cms/tni-ad/uo/form-filter-laporan-realisasi-anggaran-belanja-menurut-wilayah-satuan-kerja-tingkat-eselon-i', 'Backend\TniADUOController@form_filter_laporan_realisasi_anggaran_belanja_menurut_wilayah_satuan_kerja_tingkat_eselon_i');
	Route::post('cms/tni-ad/uo/laporan-realisasi-anggaran-belanja-menurut-wilayah-satuan-kerja-tingkat-eselon-i', 'Backend\TniADUOController@laporan_realisasi_anggaran_belanja_menurut_wilayah_satuan_kerja_tingkat_eselon_i');
	Route::get('cms/tni-ad/uo/form-filter-laporan-realisasi-anggaran-belanja-menurut-jenis-belanja-akun-tingkat-eselon-i', 'Backend\TniADUOController@form_filter_laporan_realisasi_anggaran_belanja_menurut_jenis_belanja_akun_tingkat_eselon_i');
	Route::post('cms/tni-ad/uo/laporan-realisasi-anggaran-belanja-menurut-jenis-belanja-akun-tingkat-eselon-i', 'Backend\TniADUOController@laporan_realisasi_anggaran_belanja_menurut_jenis_belanja_akun_tingkat_eselon_i');
	Route::get('cms/tni-ad/uo/form-filter-laporan-realisasi-anggaran-belanja-menurut-sumber-dana-program-kegiatan-tingkat-eselon-i', 'Backend\TniADUOController@form_filter_laporan_realisasi_anggaran_belanja_menurut_sumber_dana_program_kegiatan_tingkat_eselon_i');
	Route::post('cms/tni-ad/uo/laporan-realisasi-anggaran-belanja-menurut-sumber-dana-program-kegiatan-tingkat-eselon-i', 'Backend\TniADUOController@laporan_realisasi_anggaran_belanja_menurut_sumber_dana_program_kegiatan_tingkat_eselon_i');

	//------------------------------------------
	Route::get('cms/tni-ad/uo/tahun-anggaran', 'Backend\TniADUOController@tahun_anggaran');
	Route::get('cms/tni-ad/uo/tahun-anggaran-baru', 'Backend\TniADUOController@tahun_anggaran_baru');
	Route::get('cms/tni-ad/uo/tambah-sumber-anggaran', 'Backend\TniADUOController@tambah_sumber_anggaran');
	Route::get('cms/tni-ad/uo/tambah-upload-pendapatan', 'Backend\TniADUOController@tambah_upload_pendapatan');
	Route::get('cms/tni-ad/uo/buat-anggaran-selesai', 'Backend\TniADUOController@buat_anggaran_selesai');
	Route::get('cms/tni-ad/uo/dashboard', 'Backend\TniADUOController@dashboard');
	Route::get('cms/tni-ad/uo/anggaran', 'Backend\TniADUOController@anggaran');
	Route::get('cms/tni-ad/uo/revisi-anggaran', 'Backend\TniADUOController@revisi_anggaran');
	Route::get('cms/tni-ad/uo/edit-semua-revisi-anggaran', 'Backend\TniADUOController@edit_semua_revisi_anggaran');
	Route::get('cms/tni-ad/uo/rencana-penarikan-dana', 'Backend\TniADUOController@rencana_penarikan_dana');
	Route::get('cms/tni-ad/uo/edit-rencana-penarikan-dana', 'Backend\TniADUOController@edit_rencana_penarikan_dana');

	Route::get('cms/tni-ad/uo/edit-revisi-anggaran', 'Backend\TniADUOController@edit_revisi_anggaran');
	Route::get('cms/tni-ad/uo/revisi-anggaran-detail', 'Backend\TniADUOController@revisi_anggaran_detail');
	Route::get('cms/tni-ad/uo/rincian-anggaran', 'Backend\TniADUOController@anggaran');
	Route::get('cms/tni-ad/uo/rincian-anggaran-detail', 'Backend\TniADUOController@anggaran_detail');
	Route::get('cms/tni-ad/uo/realisasi-anggaran', 'Backend\TniADUOController@realisasi_anggaran');
	Route::get('cms/tni-ad/uo/realisasi-anggaran-detail', 'Backend\TniADUOController@realisasi_anggaran_detail');
	Route::get('cms/tni-ad/uo/tambah-realisasi-anggaran', 'Backend\TniADUOController@tambah_realisasi_anggaran');
	Route::get('cms/tni-ad/uo/edit-realisasi-anggaran', 'Backend\TniADUOController@edit_realisasi_anggaran');

	Route::get('cms/tni-ad/uo/tambah-pencairan-dana', 'Backend\TniADUOController@tambah_pencairan_dana');
	//
	Route::get('cms/tni-ad/uo/input-anggaran', 'Backend\TniADUOController@input_anggaran');
	//Laporan
	Route::get('cms/tni-ad/uo/laporan-anggaran-belanja-pegawai', 'Backend\TniADUOController@laporan_pelaksanaan_abp');
	Route::post('cms/tni-ad/uo/laporan-rincian-anggaran-belanja-pegawai', 'Backend\TniADUOController@laporan_rincian_abp');
	Route::get('cms/tni-ad/uo/laporan-anggaran-belanja-modal', 'Backend\TniADUOController@laporan_belanja_modal');
	Route::post('cms/tni-ad/uo/laporan-rincian-belanja-modal', 'Backend\TniADUOController@laporan_rincian_modal');
	Route::get('cms/tni-ad/uo/laporan-anggaran-belanja-barang', 'Backend\TniADUOController@laporan_belanja_barang');
	Route::post('cms/tni-ad/uo/laporan-rincian-belanja-barang', 'Backend\TniADUOController@laporan_rincian_barang');

	Route::get('cms/tni-ad/uo/form-filter-laporan-realisasi-rpd', 'Backend\TniADUOController@form_filter_laporan_realisasi_rpd');
	Route::post('cms/tni-ad/uo/laporan-realisasi-rpd', 'Backend\TniADUOController@laporan_realisasi_rpd');

	//Signout
	Route::get('cms/tni-ad/uo/signout', 'Backend\TniADUOController@signout');


	/* TNI AU */
	///=======================================Laporan

	/* ==========Laporan Perkembangan========== */
	Route::get('cms/tni-au/uo/form-filter-laporan-perkembangan-pengadaan-barang-dan-jasa', 'Backend\TniAUUOController@form_filter_laporan_perkembangan_pengadaan_barang_dan_jasa');
	Route::post('cms/tni-au/uo/laporan-perkembangan-pengadaan-barang-dan-jasa', 'Backend\TniAUUOController@laporan_perkembangan_pengadaan_barang_dan_jasa');
	Route::get('cms/tni-au/uo/form-filter-laporan-perkembangan-pembangunan-dan-pengembangan-fasilitas', 'Backend\TniAUUOController@form_filter_laporan_perkembangan_pembangunan_dan_pengembangan_fasilitas');
	Route::post('cms/tni-au/uo/laporan-perkembangan-pembangunan-dan-pengembangan-fasilitas', 'Backend\TniAUUOController@laporan_perkembangan_pembangunan_dan_pengembangan_fasilitas');

	/* ==========Laporan Pelaksanaan========== */
	Route::get('cms/tni-au/uo/form-filter-laporan-pelaksanaan-anggaran-belanja-pegawai', 'Backend\TniAUUOController@form_filter_laporan_pelaksanaan_anggaran_belanja_pegawai');
	Route::post('cms/tni-au/uo/laporan-pelaksanaan-anggaran-belanja-pegawai', 'Backend\TniAUUOController@laporan_pelaksanaan_anggaran_belanja_pegawai');
	Route::get('cms/tni-au/uo/form-filter-laporan-pelaksanaan-anggaran-belanja-barang', 'Backend\TniAUUOController@form_filter_laporan_pelaksanaan_anggaran_belanja_barang');
	Route::get('cms/tni-au/uo/laporan-pelaksanaan-anggaran-belanja-barang', 'Backend\TniAUUOController@laporan_pelaksanaan_anggaran_belanja_barang');
	Route::get('cms/tni-au/uo/form-filter-laporan-pelaksanaan-anggaran-belanja-modal', 'Backend\TniAUUOController@form_filter_laporan_pelaksanaan_anggaran_belanja_modal');
	Route::post('cms/tni-au/uo/laporan-pelaksanaan-anggaran-belanja-modal', 'Backend\TniAUUOController@laporan_pelaksanaan_anggaran_belanja_modal');
	Route::get('cms/tni-au/uo/form-filter-laporan-pelaksanaan-barang-dan-jasa', 'Backend\TniAUUOController@form_filter_laporan_pelaksanaan_barang_dan_jasa');
	Route::post('cms/tni-au/uo/laporan-pelaksanaan-barang-dan-jasa', 'Backend\TniAUUOController@laporan_pelaksanaan_barang_dan_jasa');
	Route::get('cms/tni-au/uo/form-filter-laporan-pelaksanaan-perkembangan-kegiatan-prioritas', 'Backend\TniAUUOController@form_filter_laporan_pelaksanaan_perkembangan_kegiatan_prioritas');
	Route::post('cms/tni-au/uo/laporan-pelaksanaan-perkembangan-kegiatan-prioritas', 'Backend\TniAUUOController@laporan_pelaksanaan_perkembangan_kegiatan_prioritas');
	Route::get('cms/tni-au/uo/form-filter-laporan-pelaksanaan-perkembangan-pembangunan-dan-fasilitas', 'Backend\TniAUUOController@form_filter_laporan_pelaksanaan_perkembangan_pembangunan_dan_fasilitas');
	Route::post('cms/tni-au/uo/laporan-pelaksanaan-perkembangan-pembangunan-dan-fasilitas', 'Backend\TniAUUOController@laporan_pelaksanaan_perkembangan_pembangunan_dan_fasilitas');
	Route::get('cms/tni-au/uo/form-filter-laporan-realisasi-pelaksanaan-anggaran-perjenis-belanja', 'Backend\TniAUUOController@form_filter_laporan_realisasi_pelaksanaan_anggaran_perjenis_belanja');
	Route::post('cms/tni-au/uo/laporan-realisasi-pelaksanaan-anggaran-perjenis-belanja', 'Backend\TniAUUOController@laporan_realisasi_pelaksanaan_anggaran_perjenis_belanja');

	/* ==========Hibah========== */
	Route::get('cms/tni-au/uo/form-filter-laporan-penerimaan-hibah-dalam-negeri', 'Backend\TniAUUOController@form_filter_laporan_penerimaan_hibah_dalam_negeri');
	Route::post('cms/tni-au/uo/laporan-penerimaan-hibah-dalam-negeri', 'Backend\TniAUUOController@laporan_penerimaan_hibah_dalam_negeri');

	/* ==========Pendapatan========== */
	Route::get('cms/tni-au/uo/form-filter-laporan-pendapatan-negara', 'Backend\TniAUUOController@form_filter_laporan_pendapatan_negara');
	Route::post('cms/tni-au/uo/laporan-pendapatan-negara', 'Backend\TniAUUOController@laporan_pendapatan_negara');
	Route::get('cms/tni-au/uo/form-filter-laporan-anggaran-pemeliharaan', 'Backend\TniAUUOController@form_filter_laporan_anggaran_pemeliharaan');
	Route::post('cms/tni-au/uo/laporan-anggaran-pemeliharaan', 'Backend\TniAUUOController@laporan_anggaran_pemeliharaan');
	Route::get('cms/tni-au/uo/form-filter-laporan-anggaran-alutsista', 'Backend\TniAUUOController@form_filter_laporan_anggaran_alutsista');
	Route::post('cms/tni-au/uo/laporan-anggaran-alutsista', 'Backend\TniAUUOController@laporan_anggaran_alutsista');
	Route::get('cms/tni-au/uo/form-filter-laporan-anggaran-mef', 'Backend\TniAUUOController@form_filter_laporan_anggaran_mef');
	Route::post('cms/tni-au/uo/laporan-anggaran-mef', 'Backend\TniAUUOController@laporan_anggaran_mef');
	Route::get('cms/tni-au/uo/form-filter-laporan-anggaran-perbatasan', 'Backend\TniAUUOController@form_filter_laporan_anggaran_perbatasan');
	Route::post('cms/tni-au/uo/laporan-anggaran-perbatasan', 'Backend\TniAUUOController@laporan_anggaran_perbatasan');
	Route::get('cms/tni-au/uo/form-filter-laporan-anggaran-pinjaman', 'Backend\TniAUUOController@form_filter_laporan_anggaran_pinjaman');
	Route::post('cms/tni-au/uo/laporan-anggaran-pinjaman', 'Backend\TniAUUOController@laporan_anggaran_pinjaman');
	Route::get('cms/tni-au/uo/form-filter-laporan-anggaran-prioritas', 'Backend\TniAUUOController@form_filter_laporan_anggaran_prioritas');
	Route::post('cms/tni-au/uo/laporan-anggaran-prioritas', 'Backend\TniAUUOController@laporan_anggaran_prioritas');

	Route::get('cms/tni-au/uo/form-filter-laporan-realisasi-anggaran', 'Backend\TniAUUOController@form_filter_laporan_realisasi_anggaran');
	Route::post('cms/tni-au/uo/laporan-realisasi-anggaran', 'Backend\TniAUUOController@laporan_realisasi_anggaran');
	Route::get('cms/tni-au/uo/form-filter-laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i-menurut-wilayah-satuan-kerja', 'Backend\TniAUUOController@form_filter_laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i_menurut_wilayah_satuan_kerja');
	Route::post('cms/tni-au/uo/laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i-menurut-wilayah-satuan-kerja', 'Backend\TniAUUOController@laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i_menurut_wilayah_satuan_kerja');
	Route::get('cms/tni-au/uo/form-filter-laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i', 'Backend\TniAUUOController@form_filter_laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i');
	Route::post('cms/tni-au/uo/laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i', 'Backend\TniAUUOController@laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i');
	Route::get('cms/tni-au/uo/form-filter-laporan-realisasi-anggaran-belanja-menurut-wilayah-satuan-kerja-tingkat-eselon-i', 'Backend\TniAUUOController@form_filter_laporan_realisasi_anggaran_belanja_menurut_wilayah_satuan_kerja_tingkat_eselon_i');
	Route::post('cms/tni-au/uo/laporan-realisasi-anggaran-belanja-menurut-wilayah-satuan-kerja-tingkat-eselon-i', 'Backend\TniAUUOController@laporan_realisasi_anggaran_belanja_menurut_wilayah_satuan_kerja_tingkat_eselon_i');
	Route::get('cms/tni-au/uo/form-filter-laporan-realisasi-anggaran-belanja-menurut-jenis-belanja-akun-tingkat-eselon-i', 'Backend\TniAUUOController@form_filter_laporan_realisasi_anggaran_belanja_menurut_jenis_belanja_akun_tingkat_eselon_i');
	Route::post('cms/tni-au/uo/laporan-realisasi-anggaran-belanja-menurut-jenis-belanja-akun-tingkat-eselon-i', 'Backend\TniAUUOController@laporan_realisasi_anggaran_belanja_menurut_jenis_belanja_akun_tingkat_eselon_i');
	Route::get('cms/tni-au/uo/form-filter-laporan-realisasi-anggaran-belanja-menurut-sumber-dana-program-kegiatan-tingkat-eselon-i', 'Backend\TniAUUOController@form_filter_laporan_realisasi_anggaran_belanja_menurut_sumber_dana_program_kegiatan_tingkat_eselon_i');
	Route::post('cms/tni-au/uo/laporan-realisasi-anggaran-belanja-menurut-sumber-dana-program-kegiatan-tingkat-eselon-i', 'Backend\TniAUUOController@laporan_realisasi_anggaran_belanja_menurut_sumber_dana_program_kegiatan_tingkat_eselon_i');


	//----------------------
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
	Route::get('cms/tni-au/uo/rencana-penarikan-dana', 'Backend\TniAUUOController@rencana_penarikan_dana');
	Route::get('cms/tni-au/uo/edit-rencana-penarikan-dana', 'Backend\TniAUUOController@edit_rencana_penarikan_dana');

	Route::get('cms/tni-au/uo/edit-revisi-anggaran', 'Backend\TniAUUOController@edit_revisi_anggaran');
	Route::get('cms/tni-au/uo/revisi-anggaran-detail', 'Backend\TniAUUOController@revisi_anggaran_detail');
	Route::get('cms/tni-au/uo/rincian-anggaran-detail', 'Backend\TniAUUOController@anggaran_detail');
	Route::get('cms/tni-au/uo/realisasi-anggaran', 'Backend\TniAUUOController@realisasi_anggaran');
	Route::get('cms/tni-au/uo/realisasi-anggaran-detail', 'Backend\TniAUUOController@realisasi_anggaran_detail');
	Route::get('cms/tni-au/uo/tambah-realisasi-anggaran', 'Backend\TniAUUOController@tambah_realisasi_anggaran');
	Route::get('cms/tni-au/uo/edit-realisasi-anggaran', 'Backend\TniAUUOController@edit_realisasi_anggaran');

	Route::get('cms/tni-au/uo/tambah-pencairan-dana', 'Backend\TniAUUOController@tambah_pencairan_dana');
	//
	Route::get('cms/tni-au/uo/input-anggaran', 'Backend\TniAUUOController@input_anggaran');
	//Laporan
	Route::get('cms/tni-au/uo/laporan-anggaran-belanja-pegawai', 'Backend\TniAUUOController@laporan_pelaksanaan_abp');
	Route::post('cms/tni-au/uo/laporan-rincian-anggaran-belanja-pegawai', 'Backend\TniAUUOController@laporan_rincian_abp');
	Route::get('cms/tni-au/uo/laporan-anggaran-belanja-modal', 'Backend\TniAUUOController@laporan_belanja_modal');
	Route::post('cms/tni-au/uo/laporan-rincian-belanja-modal', 'Backend\TniAUUOController@laporan_rincian_modal');
	Route::get('cms/tni-au/uo/laporan-anggaran-belanja-barang', 'Backend\TniAUUOController@laporan_belanja_barang');
	Route::post('cms/tni-au/uo/laporan-rincian-belanja-barang', 'Backend\TniAUUOController@laporan_rincian_barang');

	Route::get('cms/tni-au/uo/form-filter-laporan-realisasi-rpd', 'Backend\TniAUUOController@form_filter_laporan_realisasi_rpd');
	Route::post('cms/tni-au/uo/laporan-realisasi-rpd', 'Backend\TniAUUOController@laporan_realisasi_rpd');

	//Signout
	Route::get('cms/tni-au/uo/signout', 'Backend\TniAUUOController@signout');

	/* TNI AL */
	///=======================================Laporan

	/* ==========Laporan Perkembangan========== */
	Route::get('cms/tni-al/uo/form-filter-laporan-perkembangan-pengadaan-barang-dan-jasa', 'Backend\TniALUOController@form_filter_laporan_perkembangan_pengadaan_barang_dan_jasa');
	Route::post('cms/tni-al/uo/laporan-perkembangan-pengadaan-barang-dan-jasa', 'Backend\TniALUOController@laporan_perkembangan_pengadaan_barang_dan_jasa');
	Route::get('cms/tni-al/uo/form-filter-laporan-perkembangan-pembangunan-dan-pengembangan-fasilitas', 'Backend\TniALUOController@form_filter_laporan_perkembangan_pembangunan_dan_pengembangan_fasilitas');
	Route::post('cms/tni-al/uo/laporan-perkembangan-pembangunan-dan-pengembangan-fasilitas', 'Backend\TniALUOController@laporan_perkembangan_pembangunan_dan_pengembangan_fasilitas');

	/* ==========Laporan Pelaksanaan========== */
	Route::get('cms/tni-al/uo/form-filter-laporan-pelaksanaan-anggaran-belanja-pegawai', 'Backend\TniALUOController@form_filter_laporan_pelaksanaan_anggaran_belanja_pegawai');
	Route::post('cms/tni-al/uo/laporan-pelaksanaan-anggaran-belanja-pegawai', 'Backend\TniALUOController@laporan_pelaksanaan_anggaran_belanja_pegawai');
	Route::get('cms/tni-al/uo/form-filter-laporan-pelaksanaan-anggaran-belanja-barang', 'Backend\TniALUOController@form_filter_laporan_pelaksanaan_anggaran_belanja_barang');
	Route::get('cms/tni-al/uo/laporan-pelaksanaan-anggaran-belanja-barang', 'Backend\TniALUOController@laporan_pelaksanaan_anggaran_belanja_barang');
	Route::get('cms/tni-al/uo/form-filter-laporan-pelaksanaan-anggaran-belanja-modal', 'Backend\TniALUOController@form_filter_laporan_pelaksanaan_anggaran_belanja_modal');
	Route::post('cms/tni-al/uo/laporan-pelaksanaan-anggaran-belanja-modal', 'Backend\TniALUOController@laporan_pelaksanaan_anggaran_belanja_modal');
	Route::get('cms/tni-al/uo/form-filter-laporan-pelaksanaan-barang-dan-jasa', 'Backend\TniALUOController@form_filter_laporan_pelaksanaan_barang_dan_jasa');
	Route::post('cms/tni-al/uo/laporan-pelaksanaan-barang-dan-jasa', 'Backend\TniALUOController@laporan_pelaksanaan_barang_dan_jasa');
	Route::get('cms/tni-al/uo/form-filter-laporan-pelaksanaan-perkembangan-kegiatan-prioritas', 'Backend\TniALUOController@form_filter_laporan_pelaksanaan_perkembangan_kegiatan_prioritas');
	Route::post('cms/tni-al/uo/laporan-pelaksanaan-perkembangan-kegiatan-prioritas', 'Backend\TniALUOController@laporan_pelaksanaan_perkembangan_kegiatan_prioritas');
	Route::get('cms/tni-al/uo/form-filter-laporan-pelaksanaan-perkembangan-pembangunan-dan-fasilitas', 'Backend\TniALUOController@form_filter_laporan_pelaksanaan_perkembangan_pembangunan_dan_fasilitas');
	Route::post('cms/tni-al/uo/laporan-pelaksanaan-perkembangan-pembangunan-dan-fasilitas', 'Backend\TniALUOController@laporan_pelaksanaan_perkembangan_pembangunan_dan_fasilitas');
	Route::get('cms/tni-al/uo/form-filter-laporan-realisasi-pelaksanaan-anggaran-perjenis-belanja', 'Backend\TniALUOController@form_filter_laporan_realisasi_pelaksanaan_anggaran_perjenis_belanja');
	Route::post('cms/tni-al/uo/laporan-realisasi-pelaksanaan-anggaran-perjenis-belanja', 'Backend\TniALUOController@laporan_realisasi_pelaksanaan_anggaran_perjenis_belanja');

	/* ==========Hibah========== */
	Route::get('cms/tni-al/uo/form-filter-laporan-penerimaan-hibah-dalam-negeri', 'Backend\TniALUOController@form_filter_laporan_penerimaan_hibah_dalam_negeri');
	Route::post('cms/tni-al/uo/laporan-penerimaan-hibah-dalam-negeri', 'Backend\TniALUOController@laporan_penerimaan_hibah_dalam_negeri');

	/* ==========Pendapatan========== */
	Route::get('cms/tni-al/uo/form-filter-laporan-pendapatan-negara', 'Backend\TniALUOController@form_filter_laporan_pendapatan_negara');
	Route::post('cms/tni-al/uo/laporan-pendapatan-negara', 'Backend\TniALUOController@laporan_pendapatan_negara');
	Route::get('cms/tni-al/uo/form-filter-laporan-anggaran-pemeliharaan', 'Backend\TniALUOController@form_filter_laporan_anggaran_pemeliharaan');
	Route::post('cms/tni-al/uo/laporan-anggaran-pemeliharaan', 'Backend\TniALUOController@laporan_anggaran_pemeliharaan');
	Route::get('cms/tni-al/uo/form-filter-laporan-anggaran-alutsista', 'Backend\TniALUOController@form_filter_laporan_anggaran_alutsista');
	Route::post('cms/tni-al/uo/laporan-anggaran-alutsista', 'Backend\TniALUOController@laporan_anggaran_alutsista');
	Route::get('cms/tni-al/uo/form-filter-laporan-anggaran-mef', 'Backend\TniALUOController@form_filter_laporan_anggaran_mef');
	Route::post('cms/tni-al/uo/laporan-anggaran-mef', 'Backend\TniALUOController@laporan_anggaran_mef');
	Route::get('cms/tni-al/uo/form-filter-laporan-anggaran-perbatasan', 'Backend\TniALUOController@form_filter_laporan_anggaran_perbatasan');
	Route::post('cms/tni-al/uo/laporan-anggaran-perbatasan', 'Backend\TniALUOController@laporan_anggaran_perbatasan');
	Route::get('cms/tni-al/uo/form-filter-laporan-anggaran-pinjaman', 'Backend\TniALUOController@form_filter_laporan_anggaran_pinjaman');
	Route::post('cms/tni-al/uo/laporan-anggaran-pinjaman', 'Backend\TniALUOController@laporan_anggaran_pinjaman');
	Route::get('cms/tni-al/uo/form-filter-laporan-anggaran-prioritas', 'Backend\TniALUOController@form_filter_laporan_anggaran_prioritas');
	Route::post('cms/tni-al/uo/laporan-anggaran-prioritas', 'Backend\TniALUOController@laporan_anggaran_prioritas');

	Route::get('cms/tni-al/uo/form-filter-laporan-realisasi-anggaran', 'Backend\TniALUOController@form_filter_laporan_realisasi_anggaran');
	Route::post('cms/tni-al/uo/laporan-realisasi-anggaran', 'Backend\TniALUOController@laporan_realisasi_anggaran');
	Route::get('cms/tni-al/uo/form-filter-laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i-menurut-wilayah-satuan-kerja', 'Backend\TniALUOController@form_filter_laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i_menurut_wilayah_satuan_kerja');
	Route::post('cms/tni-al/uo/laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i-menurut-wilayah-satuan-kerja', 'Backend\TniALUOController@laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i_menurut_wilayah_satuan_kerja');
	Route::get('cms/tni-al/uo/form-filter-laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i', 'Backend\TniALUOController@form_filter_laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i');
	Route::post('cms/tni-al/uo/laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i', 'Backend\TniALUOController@laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i');
	Route::get('cms/tni-al/uo/form-filter-laporan-realisasi-anggaran-belanja-menurut-wilayah-satuan-kerja-tingkat-eselon-i', 'Backend\TniALUOController@form_filter_laporan_realisasi_anggaran_belanja_menurut_wilayah_satuan_kerja_tingkat_eselon_i');
	Route::post('cms/tni-al/uo/laporan-realisasi-anggaran-belanja-menurut-wilayah-satuan-kerja-tingkat-eselon-i', 'Backend\TniALUOController@laporan_realisasi_anggaran_belanja_menurut_wilayah_satuan_kerja_tingkat_eselon_i');
	Route::get('cms/tni-al/uo/form-filter-laporan-realisasi-anggaran-belanja-menurut-jenis-belanja-akun-tingkat-eselon-i', 'Backend\TniALUOController@form_filter_laporan_realisasi_anggaran_belanja_menurut_jenis_belanja_akun_tingkat_eselon_i');
	Route::post('cms/tni-al/uo/laporan-realisasi-anggaran-belanja-menurut-jenis-belanja-akun-tingkat-eselon-i', 'Backend\TniALUOController@laporan_realisasi_anggaran_belanja_menurut_jenis_belanja_akun_tingkat_eselon_i');
	Route::get('cms/tni-al/uo/form-filter-laporan-realisasi-anggaran-belanja-menurut-sumber-dana-program-kegiatan-tingkat-eselon-i', 'Backend\TniALUOController@form_filter_laporan_realisasi_anggaran_belanja_menurut_sumber_dana_program_kegiatan_tingkat_eselon_i');
	Route::post('cms/tni-al/uo/laporan-realisasi-anggaran-belanja-menurut-sumber-dana-program-kegiatan-tingkat-eselon-i', 'Backend\TniALUOController@laporan_realisasi_anggaran_belanja_menurut_sumber_dana_program_kegiatan_tingkat_eselon_i');
	
	//--------------------
	Route::get('cms/tni-al/uo/tahun-anggaran', 'Backend\TniALUOController@tahun_anggaran');
	Route::get('cms/tni-al/uo/tahun-anggaran-baru', 'Backend\TniALUOController@tahun_anggaran_baru');
	Route::get('cms/tni-al/uo/tambah-sumber-anggaran', 'Backend\TniALUOController@tambah_sumber_anggaran');
	Route::get('cms/tni-al/uo/tambah-upload-pendapatan', 'Backend\TniALUOController@tambah_upload_pendapatan');
	Route::get('cms/tni-al/uo/buat-anggaran-selesai', 'Backend\TniALUOController@buat_anggaran_selesai');
	Route::get('cms/tni-al/uo/dashboard', 'Backend\TniALUOController@dashboard');
	Route::get('cms/tni-al/uo/anggaran', 'Backend\TniALUOController@anggaran');
	Route::get('cms/tni-al/uo/revisi-anggaran', 'Backend\TniALUOController@revisi_anggaran');
	Route::get('cms/tni-al/uo/edit-semua-revisi-anggaran', 'Backend\TniALUOController@edit_semua_revisi_anggaran');
	Route::get('cms/tni-al/uo/rencana-penarikan-dana', 'Backend\TniALUOController@rencana_penarikan_dana');
	Route::get('cms/tni-al/uo/edit-rencana-penarikan-dana', 'Backend\TniALUOController@edit_rencana_penarikan_dana');

	Route::get('cms/tni-al/uo/edit-revisi-anggaran', 'Backend\TniALUOController@edit_revisi_anggaran');
	Route::get('cms/tni-al/uo/revisi-anggaran-detail', 'Backend\TniALUOController@revisi_anggaran_detail');
	Route::get('cms/tni-al/uo/rincian-anggaran', 'Backend\TniALUOController@anggaran');
	Route::get('cms/tni-al/uo/rincian-anggaran-detail', 'Backend\TniALUOController@anggaran_detail');
	Route::get('cms/tni-al/uo/realisasi-anggaran', 'Backend\TniALUOController@realisasi_anggaran');
	Route::get('cms/tni-al/uo/realisasi-anggaran-detail', 'Backend\TniALUOController@realisasi_anggaran_detail');
	Route::get('cms/tni-al/uo/tambah-realisasi-anggaran', 'Backend\TniALUOController@tambah_realisasi_anggaran');
	Route::get('cms/tni-al/uo/edit-realisasi-anggaran', 'Backend\TniALUOController@edit_realisasi_anggaran');

	Route::get('cms/tni-ad/ul/tambah-pencairan-dana', 'Backend\TniALUOController@tambah_pencairan_dana');
	//
	Route::get('cms/tni-al/uo/input-anggaran', 'Backend\TniALUOController@input_anggaran');
	//Laporan
	Route::get('cms/tni-al/uo/laporan-anggaran-belanja-pegawai', 'Backend\TniALUOController@laporan_pelaksanaan_abp');
	Route::post('cms/tni-al/uo/laporan-rincian-anggaran-belanja-pegawai', 'Backend\TniALUOController@laporan_rincian_abp');
	Route::get('cms/tni-al/uo/laporan-anggaran-belanja-modal', 'Backend\TniALUOController@laporan_belanja_modal');
	Route::post('cms/tni-al/uo/laporan-rincian-belanja-modal', 'Backend\TniALUOController@laporan_rincian_modal');
	Route::get('cms/tni-al/uo/laporan-anggaran-belanja-barang', 'Backend\TniALUOController@laporan_belanja_barang');
	Route::post('cms/tni-al/uo/laporan-rincian-belanja-barang', 'Backend\TniALUOController@laporan_rincian_barang');

	Route::get('cms/tni-al/uo/form-filter-laporan-realisasi-rpd', 'Backend\TniALUOController@form_filter_laporan_realisasi_rpd');
	Route::post('cms/tni-al/uo/laporan-realisasi-rpd', 'Backend\TniALUOController@laporan_realisasi_rpd');

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
	Route::get('cms/kotama/form-filter-laporan-perkembangan-pengadaan-barang-dan-jasa', 'Backend\KotamaController@form_filter_laporan_perkembangan_pengadaan_barang_dan_jasa');
	Route::post('cms/kotama/laporan-perkembangan-pengadaan-barang-dan-jasa', 'Backend\KotamaController@laporan_perkembangan_pengadaan_barang_dan_jasa');
	Route::get('cms/kotama/form-filter-laporan-perkembangan-pembangunan-dan-pengembangan-fasilitas', 'Backend\KotamaController@form_filter_laporan_perkembangan_pembangunan_dan_pengembangan_fasilitas');
	Route::post('cms/kotama/laporan-perkembangan-pembangunan-dan-pengembangan-fasilitas', 'Backend\KotamaController@laporan_perkembangan_pembangunan_dan_pengembangan_fasilitas');

	Route::get('cms/kotama/form-filter-laporan-pelaksanaan-anggaran-belanja-pegawai', 'Backend\KotamaController@form_filter_laporan_pelaksanaan_anggaran_belanja_pegawai');
	Route::post('cms/kotama/laporan-pelaksanaan-anggaran-belanja-pegawai', 'Backend\KotamaController@laporan_pelaksanaan_anggaran_belanja_pegawai');
	Route::get('cms/kotama/form-filter-laporan-pelaksanaan-anggaran-belanja-barang', 'Backend\KotamaController@form_filter_laporan_pelaksanaan_anggaran_belanja_barang');
	Route::get('cms/kotama/laporan-pelaksanaan-anggaran-belanja-barang', 'Backend\KotamaController@laporan_pelaksanaan_anggaran_belanja_barang');
	Route::get('cms/kotama/form-filter-laporan-pelaksanaan-anggaran-belanja-modal', 'Backend\KotamaController@form_filter_laporan_pelaksanaan_anggaran_belanja_modal');
	Route::post('cms/kotama/laporan-pelaksanaan-anggaran-belanja-modal', 'Backend\KotamaController@laporan_pelaksanaan_anggaran_belanja_modal');
	Route::get('cms/kotama/form-filter-laporan-pelaksanaan-barang-dan-jasa', 'Backend\KotamaController@form_filter_laporan_pelaksanaan_barang_dan_jasa');
	Route::post('cms/kotama/laporan-pelaksanaan-barang-dan-jasa', 'Backend\KotamaController@laporan_pelaksanaan_barang_dan_jasa');
	Route::get('cms/kotama/form-filter-laporan-pelaksanaan-perkembangan-kegiatan-prioritas', 'Backend\KotamaController@form_filter_laporan_pelaksanaan_perkembangan_kegiatan_prioritas');
	Route::post('cms/kotama/laporan-pelaksanaan-perkembangan-kegiatan-prioritas', 'Backend\KotamaController@laporan_pelaksanaan_perkembangan_kegiatan_prioritas');
	Route::get('cms/kotama/form-filter-laporan-pelaksanaan-perkembangan-pembangunan-dan-fasilitas', 'Backend\KotamaController@form_filter_laporan_pelaksanaan_perkembangan_pembangunan_dan_fasilitas');
	Route::post('cms/kotama/laporan-pelaksanaan-perkembangan-pembangunan-dan-fasilitas', 'Backend\KotamaController@laporan_pelaksanaan_perkembangan_pembangunan_dan_fasilitas');
	Route::get('cms/kotama/form-filter-laporan-realisasi-pelaksanaan-anggaran-perjenis-belanja', 'Backend\KotamaController@form_filter_laporan_realisasi_pelaksanaan_anggaran_perjenis_belanja');
	Route::post('cms/kotama/laporan-realisasi-pelaksanaan-anggaran-perjenis-belanja', 'Backend\KotamaController@laporan_realisasi_pelaksanaan_anggaran_perjenis_belanja');

	Route::get('cms/kotama/form-filter-laporan-penerimaan-hibah-dalam-negeri', 'Backend\KotamaController@form_filter_laporan_penerimaan_hibah_dalam_negeri');
	Route::post('cms/kotama/laporan-penerimaan-hibah-dalam-negeri', 'Backend\KotamaController@laporan_penerimaan_hibah_dalam_negeri');

	Route::get('cms/kotama/form-filter-laporan-pendapatan-negara', 'Backend\KotamaController@form_filter_laporan_pendapatan_negara');
	Route::post('cms/kotama/laporan-pendapatan-negara', 'Backend\KotamaController@laporan_pendapatan_negara');
	Route::get('cms/kotama/form-filter-laporan-anggaran-pemeliharaan', 'Backend\KotamaController@form_filter_laporan_anggaran_pemeliharaan');
	Route::post('cms/kotama/laporan-anggaran-pemeliharaan', 'Backend\KotamaController@laporan_anggaran_pemeliharaan');
	Route::get('cms/kotama/form-filter-laporan-anggaran-alutsista', 'Backend\KotamaController@form_filter_laporan_anggaran_alutsista');
	Route::post('cms/kotama/laporan-anggaran-alutsista', 'Backend\KotamaController@laporan_anggaran_alutsista');
	Route::get('cms/kotama/form-filter-laporan-anggaran-mef', 'Backend\KotamaController@form_filter_laporan_anggaran_mef');
	Route::post('cms/kotama/laporan-anggaran-mef', 'Backend\KotamaController@laporan_anggaran_mef');
	Route::get('cms/kotama/form-filter-laporan-anggaran-perbatasan', 'Backend\KotamaController@form_filter_laporan_anggaran_perbatasan');
	Route::post('cms/kotama/laporan-anggaran-perbatasan', 'Backend\KotamaController@laporan_anggaran_perbatasan');
	Route::get('cms/kotama/form-filter-laporan-anggaran-pinjaman', 'Backend\KotamaController@form_filter_laporan_anggaran_pinjaman');
	Route::post('cms/kotama/laporan-anggaran-pinjaman', 'Backend\KotamaController@laporan_anggaran_pinjaman');
	Route::get('cms/kotama/form-filter-laporan-anggaran-prioritas', 'Backend\KotamaController@form_filter_laporan_anggaran_prioritas');
	Route::post('cms/kotama/laporan-anggaran-prioritas', 'Backend\KotamaController@laporan_anggaran_prioritas');

	Route::get('cms/kotama/form-filter-laporan-realisasi-anggaran', 'Backend\KotamaController@form_filter_laporan_realisasi_anggaran');
	Route::post('cms/kotama/laporan-realisasi-anggaran', 'Backend\KotamaController@laporan_realisasi_anggaran');
	Route::get('cms/kotama/form-filter-laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i-menurut-wilayah-satuan-kerja', 'Backend\KotamaController@form_filter_laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i_menurut_wilayah_satuan_kerja');
	Route::post('cms/kotama/laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i-menurut-wilayah-satuan-kerja', 'Backend\KotamaController@laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i_menurut_wilayah_satuan_kerja');
	Route::get('cms/kotama/form-filter-laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i', 'Backend\KotamaController@form_filter_laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i');
	Route::post('cms/kotama/laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i', 'Backend\KotamaController@laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i');
	Route::get('cms/kotama/form-filter-laporan-realisasi-anggaran-belanja-menurut-wilayah-satuan-kerja-tingkat-eselon-i', 'Backend\KotamaController@form_filter_laporan_realisasi_anggaran_belanja_menurut_wilayah_satuan_kerja_tingkat_eselon_i');
	Route::post('cms/kotama/laporan-realisasi-anggaran-belanja-menurut-wilayah-satuan-kerja-tingkat-eselon-i', 'Backend\KotamaController@laporan_realisasi_anggaran_belanja_menurut_wilayah_satuan_kerja_tingkat_eselon_i');
	Route::get('cms/kotama/form-filter-laporan-realisasi-anggaran-belanja-menurut-jenis-belanja-akun-tingkat-eselon-i', 'Backend\KotamaController@form_filter_laporan_realisasi_anggaran_belanja_menurut_jenis_belanja_akun_tingkat_eselon_i');
	Route::post('cms/kotama/laporan-realisasi-anggaran-belanja-menurut-jenis-belanja-akun-tingkat-eselon-i', 'Backend\KotamaController@laporan_realisasi_anggaran_belanja_menurut_jenis_belanja_akun_tingkat_eselon_i');
	Route::get('cms/kotama/form-filter-laporan-realisasi-anggaran-belanja-menurut-sumber-dana-program-kegiatan-tingkat-eselon-i', 'Backend\KotamaController@form_filter_laporan_realisasi_anggaran_belanja_menurut_sumber_dana_program_kegiatan_tingkat_eselon_i');
	Route::post('cms/kotama/laporan-realisasi-anggaran-belanja-menurut-sumber-dana-program-kegiatan-tingkat-eselon-i', 'Backend\KotamaController@laporan_realisasi_anggaran_belanja_menurut_sumber_dana_program_kegiatan_tingkat_eselon_i');

	//Signout
	Route::get('cms/kotama/signout', 'Backend\KotamaController@signout');


});

Route::group(['middleware' => 'ValidateSatKer'], function () {

	/* SatKer */
    Route::get('cms/satker/tahun-anggaran', 'Backend\SatKerController@tahun_anggaran');
	Route::get('cms/satker/tahun-anggaran-baru', 'Backend\SatKerController@tahun_anggaran_baru');
	Route::get('cms/satker/tambah-sumber-anggaran', 'Backend\SatKerController@tambah_sumber_anggaran');
	Route::post('cms/satker/import/preview', 'Backend\SatKerController@import_preview');
	Route::post('cms/satker/import/insert', 'Backend\SatKerController@import_insert');
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
	Route::get('cms/satker/form-filter-laporan-perkembangan-pengadaan-barang-dan-jasa', 'Backend\SatKerController@form_filter_laporan_perkembangan_pengadaan_barang_dan_jasa');
	Route::post('cms/satker/laporan-perkembangan-pengadaan-barang-dan-jasa', 'Backend\SatKerController@laporan_perkembangan_pengadaan_barang_dan_jasa');
	Route::get('cms/satker/form-filter-laporan-perkembangan-pembangunan-dan-pengembangan-fasilitas', 'Backend\SatKerController@form_filter_laporan_perkembangan_pembangunan_dan_pengembangan_fasilitas');
	Route::post('cms/satker/laporan-perkembangan-pembangunan-dan-pengembangan-fasilitas', 'Backend\SatKerController@laporan_perkembangan_pembangunan_dan_pengembangan_fasilitas');

	Route::get('cms/satker/form-filter-laporan-pelaksanaan-anggaran-belanja-pegawai', 'Backend\SatKerController@form_filter_laporan_pelaksanaan_anggaran_belanja_pegawai');
	Route::post('cms/satker/laporan-pelaksanaan-anggaran-belanja-pegawai', 'Backend\SatKerController@laporan_pelaksanaan_anggaran_belanja_pegawai');
	Route::get('cms/satker/form-filter-laporan-pelaksanaan-anggaran-belanja-barang', 'Backend\SatKerController@form_filter_laporan_pelaksanaan_anggaran_belanja_barang');
	Route::get('cms/satker/laporan-pelaksanaan-anggaran-belanja-barang', 'Backend\SatKerController@laporan_pelaksanaan_anggaran_belanja_barang');
	Route::get('cms/satker/form-filter-laporan-pelaksanaan-anggaran-belanja-modal', 'Backend\SatKerController@form_filter_laporan_pelaksanaan_anggaran_belanja_modal');
	Route::post('cms/satker/laporan-pelaksanaan-anggaran-belanja-modal', 'Backend\SatKerController@laporan_pelaksanaan_anggaran_belanja_modal');
	Route::get('cms/satker/form-filter-laporan-pelaksanaan-barang-dan-jasa', 'Backend\SatKerController@form_filter_laporan_pelaksanaan_barang_dan_jasa');
	Route::post('cms/satker/laporan-pelaksanaan-barang-dan-jasa', 'Backend\SatKerController@laporan_pelaksanaan_barang_dan_jasa');
	Route::get('cms/satker/form-filter-laporan-pelaksanaan-perkembangan-kegiatan-prioritas', 'Backend\SatKerController@form_filter_laporan_pelaksanaan_perkembangan_kegiatan_prioritas');
	Route::post('cms/satker/laporan-pelaksanaan-perkembangan-kegiatan-prioritas', 'Backend\SatKerController@laporan_pelaksanaan_perkembangan_kegiatan_prioritas');
	Route::get('cms/satker/form-filter-laporan-pelaksanaan-perkembangan-pembangunan-dan-fasilitas', 'Backend\SatKerController@form_filter_laporan_pelaksanaan_perkembangan_pembangunan_dan_fasilitas');
	Route::post('cms/satker/laporan-pelaksanaan-perkembangan-pembangunan-dan-fasilitas', 'Backend\SatKerController@laporan_pelaksanaan_perkembangan_pembangunan_dan_fasilitas');
	Route::get('cms/satker/form-filter-laporan-realisasi-pelaksanaan-anggaran-perjenis-belanja', 'Backend\SatKerController@form_filter_laporan_realisasi_pelaksanaan_anggaran_perjenis_belanja');
	Route::post('cms/satker/laporan-realisasi-pelaksanaan-anggaran-perjenis-belanja', 'Backend\SatKerController@laporan_realisasi_pelaksanaan_anggaran_perjenis_belanja');

	Route::get('cms/satker/form-filter-laporan-penerimaan-hibah-dalam-negeri', 'Backend\SatKerController@form_filter_laporan_penerimaan_hibah_dalam_negeri');
	Route::post('cms/satker/laporan-penerimaan-hibah-dalam-negeri', 'Backend\SatKerController@laporan_penerimaan_hibah_dalam_negeri');

	Route::get('cms/satker/form-filter-laporan-pendapatan-negara', 'Backend\SatKerController@form_filter_laporan_pendapatan_negara');
	Route::post('cms/satker/laporan-pendapatan-negara', 'Backend\SatKerController@laporan_pendapatan_negara');
	Route::get('cms/satker/form-filter-laporan-anggaran-pemeliharaan', 'Backend\SatKerController@form_filter_laporan_anggaran_pemeliharaan');
	Route::post('cms/satker/laporan-anggaran-pemeliharaan', 'Backend\SatKerController@laporan_anggaran_pemeliharaan');
	Route::get('cms/satker/form-filter-laporan-anggaran-alutsista', 'Backend\SatKerController@form_filter_laporan_anggaran_alutsista');
	Route::post('cms/satker/laporan-anggaran-alutsista', 'Backend\SatKerController@laporan_anggaran_alutsista');
	Route::get('cms/satker/form-filter-laporan-anggaran-mef', 'Backend\SatKerController@form_filter_laporan_anggaran_mef');
	Route::post('cms/satker/laporan-anggaran-mef', 'Backend\SatKerController@laporan_anggaran_mef');
	Route::get('cms/satker/form-filter-laporan-anggaran-perbatasan', 'Backend\SatKerController@form_filter_laporan_anggaran_perbatasan');
	Route::post('cms/satker/laporan-anggaran-perbatasan', 'Backend\SatKerController@laporan_anggaran_perbatasan');
	Route::get('cms/satker/form-filter-laporan-anggaran-pinjaman', 'Backend\SatKerController@form_filter_laporan_anggaran_pinjaman');
	Route::post('cms/satker/laporan-anggaran-pinjaman', 'Backend\SatKerController@laporan_anggaran_pinjaman');
	Route::get('cms/satker/form-filter-laporan-anggaran-prioritas', 'Backend\SatKerController@form_filter_laporan_anggaran_prioritas');
	Route::post('cms/satker/laporan-anggaran-prioritas', 'Backend\SatKerController@laporan_anggaran_prioritas');

	Route::get('cms/satker/form-filter-laporan-realisasi-anggaran', 'Backend\SatKerController@form_filter_laporan_realisasi_anggaran');
	Route::post('cms/satker/laporan-realisasi-anggaran', 'Backend\SatKerController@laporan_realisasi_anggaran');
	Route::get('cms/satker/form-filter-laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i-menurut-wilayah-satuan-kerja', 'Backend\SatKerController@form_filter_laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i_menurut_wilayah_satuan_kerja');
	Route::post('cms/satker/laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i-menurut-wilayah-satuan-kerja', 'Backend\SatKerController@laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i_menurut_wilayah_satuan_kerja');
	Route::get('cms/satker/form-filter-laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i', 'Backend\SatKerController@form_filter_laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i');
	Route::post('cms/satker/laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i', 'Backend\SatKerController@laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i');
	Route::get('cms/satker/form-filter-laporan-realisasi-anggaran-belanja-menurut-wilayah-satuan-kerja-tingkat-eselon-i', 'Backend\SatKerController@form_filter_laporan_realisasi_anggaran_belanja_menurut_wilayah_satuan_kerja_tingkat_eselon_i');
	Route::post('cms/satker/laporan-realisasi-anggaran-belanja-menurut-wilayah-satuan-kerja-tingkat-eselon-i', 'Backend\SatKerController@laporan_realisasi_anggaran_belanja_menurut_wilayah_satuan_kerja_tingkat_eselon_i');
	Route::get('cms/satker/form-filter-laporan-realisasi-anggaran-belanja-menurut-jenis-belanja-akun-tingkat-eselon-i', 'Backend\SatKerController@form_filter_laporan_realisasi_anggaran_belanja_menurut_jenis_belanja_akun_tingkat_eselon_i');
	Route::post('cms/satker/laporan-realisasi-anggaran-belanja-menurut-jenis-belanja-akun-tingkat-eselon-i', 'Backend\SatKerController@laporan_realisasi_anggaran_belanja_menurut_jenis_belanja_akun_tingkat_eselon_i');
	Route::get('cms/satker/form-filter-laporan-realisasi-anggaran-belanja-menurut-sumber-dana-program-kegiatan-tingkat-eselon-i', 'Backend\SatKerController@form_filter_laporan_realisasi_anggaran_belanja_menurut_sumber_dana_program_kegiatan_tingkat_eselon_i');
	Route::post('cms/satker/laporan-realisasi-anggaran-belanja-menurut-sumber-dana-program-kegiatan-tingkat-eselon-i', 'Backend\SatKerController@laporan_realisasi_anggaran_belanja_menurut_sumber_dana_program_kegiatan_tingkat_eselon_i');

	//Signout
	Route::get('cms/satker/signout', 'Backend\SatKerController@signout');


});