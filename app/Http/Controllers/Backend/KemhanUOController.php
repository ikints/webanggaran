<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Admin;


class KemhanUOController extends Controller
{

	private $ctrl = 'uo.kemhan';
	private $title = 'Unit Organisasi';


    /*== Perkembangan page ==*/

    public function form_filter_laporan_perkembangan_pengadaan_barang_dan_jasa() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.form-filter-laporan-perkembangan-pengadaan-barang-dan-jasa";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    public function laporan_perkembangan_pengadaan_barang_dan_jasa() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.laporan-perkembangan-pengadaan-barang-dan-jasa";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    public function form_filter_laporan_perkembangan_pembangunan_dan_pengembangan_fasilitas() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.form-filter-laporan-perkembangan-pembangunan-dan-pengembangan-fasilitas";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    public function laporan_perkembangan_pembangunan_dan_pengembangan_fasilitas() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.laporan-perkembangan-pembangunan-dan-pengembangan-fasilitas";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }



    /*== Anggaran page ==*/
    public function anggaran() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.anggaran.rinciananggaran";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

     /*== Tambah Pencairan page ==*/
    public function tambah_pencairan_dana() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.tambah-pencairan-dana";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }


    public function input_anggaran() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.anggaran.input-anggaran";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    public function anggaran_detail() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.anggaran.rinciananggarandetail";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    public function rencana_penarikan_dana() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.anggaran.rencana-penarikan-dana";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    public function edit_rencana_penarikan_dana() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.anggaran.edit-rencana-penarikan-dana";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== End Anggaran page ==*/

	/*== Tahun Anggaran page ==*/
    public function tahun_anggaran() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.tahun-anggaran";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== Tahun Anggaran Baru page ==*/
    public function tahun_anggaran_baru() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.tahun-anggaran-baru";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== Tambah Sumber Anggaran page ==*/
    public function tambah_sumber_anggaran() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.tambah-sumber-anggaran";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== Tambah Upload Pendapatan page ==*/
    public function tambah_upload_pendapatan() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.tambah-upload-pendapatan";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== Buat Anggaran Selesai page ==*/
    public function buat_anggaran_selesai() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.buat-anggaran-selesai";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== Dashboard page ==*/
    public function dashboard() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.dashboard";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    

    /*== Revisi Anggaran page ==*/
    public function revisi_anggaran() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.revisianggaran";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== Edit Semua Revisi Anggaran page ==*/
    public function edit_semua_revisi_anggaran() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.edit-semua-revisi-anggaran";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== Edit Revisi Anggaran page ==*/
    public function edit_revisi_anggaran() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.edit-revisi-anggaran";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== Revisi Anggaran Detail page ==*/
    public function revisi_anggaran_detail() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.revisi-anggaran-detail";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== Realisasi Anggaran page ==*/
    public function realisasi_anggaran() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.realisasianggaran";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== Realisasi Anggaran Detail page ==*/
    public function realisasi_anggaran_detail() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.realisasianggarandetail";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== Tambah Realisasi Anggaran page ==*/
    public function tambah_realisasi_anggaran() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.tambah-realisasianggaran";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    

    

    /*== Laporan Pelaksanaan ABP page ==*/
    public function form_filter_laporan_pelaksanaan_anggaran_belanja_pegawai() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.form-filter-laporan-pelaksanaan-anggaran-belanja-pegawai";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== Laporan Pelaksanaan ABP page ==*/
    public function laporan_pelaksanaan_anggaran_belanja_pegawai() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.laporan-pelaksanaan-anggaran-belanja-pegawai";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== Laporan Rincian ABP page ==*/
    public function laporan_rincian_anggaran_belanja_pegawai() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.laporan-rincian-anggaran-belanja-pegawai";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== Laporan Belanja Modal page ==*/
    public function form_filter_laporan_pelaksanaan_anggaran_belanja_modal() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.form-filter-laporan-pelaksanaan-anggaran-belanja-modal";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== Laporan Belanja Modal page ==*/
    public function laporan_pelaksanaan_anggaran_belanja_modal() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.laporan-pelaksanaan-anggaran-belanja-modal";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }


    /*== Laporan Belanja Barang page ==*/
    public function laporan_pelaksanaan_anggaran_belanja_barang() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.laporan-pelaksanaan-anggaran-belanja-barang";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== Laporan Belanja Barang page ==*/
    public function form_filter_laporan_pelaksanaan_anggaran_belanja_barang() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.form-filter-laporan-pelaksanaan-anggaran-belanja-barang";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    //Laporan 19 Mei 2019

    /*== form_filter_laporan_realisasi_anggaran ==*/
    public function form_filter_laporan_realisasi_anggaran() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.form-filter-laporan-realisasi-anggaran";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    public function laporan_realisasi_anggaran() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.laporan-realisasi-anggaran";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== form_filter_laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i_menurut_wilayah_satuan_kerja ==*/
    public function form_filter_laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i_menurut_wilayah_satuan_kerja() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.form-filter-laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i-menurut-wilayah-satuan-kerja";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i_menurut_wilayah_satuan_kerja ==*/
    public function laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i_menurut_wilayah_satuan_kerja() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i-menurut-wilayah-satuan-kerja";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== form_filter_laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i ==*/
    public function form_filter_laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.form-filter-laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i ==*/
    public function laporan_realisasi_anggaran_pendapatan_tingkat_eselon_i() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== form-filter-laporan_realisasi_anggaran_belanja_menurut_wilayah_satuan_kerja_tingkat_eselon_i ==*/
    public function form_filter_laporan_realisasi_anggaran_belanja_menurut_wilayah_satuan_kerja_tingkat_eselon_i() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.form-filter-laporan-realisasi-anggaran-belanja-menurut-wilayah-satuan-kerja-tingkat-eselon-i";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== laporan_realisasi_anggaran_belanja_menurut_wilayah_satuan_kerja_tingkat_eselon_i ==*/
    public function laporan_realisasi_anggaran_belanja_menurut_wilayah_satuan_kerja_tingkat_eselon_i() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.laporan-realisasi-anggaran-belanja-menurut-wilayah-satuan-kerja-tingkat-eselon-i";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== form_filter_laporan_realisasi_anggaran_belanja_menurut_jenis_belanja_akun_tingkat_eselon_i ==*/
    public function form_filter_laporan_realisasi_anggaran_belanja_menurut_jenis_belanja_akun_tingkat_eselon_i() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.form-filter-laporan-realisasi-anggaran-belanja-menurut-jenis-belanja-akun-tingkat-eselon-i";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== laporan_realisasi_anggaran_belanja_menurut_jenis_belanja_akun_tingkat_eselon_i ==*/
    public function laporan_realisasi_anggaran_belanja_menurut_jenis_belanja_akun_tingkat_eselon_i() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.laporan-realisasi-anggaran-belanja-menurut-jenis-belanja-akun-tingkat-eselon-i";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== form_filter_laporan_realisasi_anggaran_belanja_menurut_sumber_dana_program_kegiatan_tingkat_eselon_i ==*/
    public function form_filter_laporan_realisasi_anggaran_belanja_menurut_sumber_dana_program_kegiatan_tingkat_eselon_i() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.form-filter-laporan-realisasi-anggaran-belanja-menurut-sumber-dana-program-kegiatan-tingkat-eselon-i";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    public function form_filter_laporan_realisasi_rpd() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.form-filter-laporan-realisasi-rpd";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    public function laporan_realisasi_rpd() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.laporan-realisasi-rpd";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== laporan_realisasi_anggaran_belanja_menurut_sumber_dana_program_kegiatan_tingkat_eselon_i ==*/
    public function laporan_realisasi_anggaran_belanja_menurut_sumber_dana_program_kegiatan_tingkat_eselon_i() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.laporan-realisasi-anggaran-belanja-menurut-sumber-dana-program-kegiatan-tingkat-eselon-i";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== form_filter_laporan_pelaksanaan_barang_dan_jasa ==*/
    public function form_filter_laporan_pelaksanaan_barang_dan_jasa() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.form-filter-laporan-pelaksanaan-barang-dan-jasa";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== laporan_pelaksanaan_barang_dan_jasa ==*/
    public function laporan_pelaksanaan_barang_dan_jasa() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.laporan-pelaksanaan-barang-dan-jasa";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== form_filter_laporan_pelaksanaan_perkembangan_kegiatan_prioritas ==*/
    public function form_filter_laporan_pelaksanaan_perkembangan_kegiatan_prioritas() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.form-filter-laporan-pelaksanaan-perkembangan-kegiatan-prioritas";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== laporan_pelaksanaan_perkembangan_kegiatan_prioritas ==*/
    public function laporan_pelaksanaan_perkembangan_kegiatan_prioritas() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.laporan-pelaksanaan-perkembangan-kegiatan-prioritas";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== form_filter_laporan_pelaksanaan_perkembangan_pembangunan_dan_fasilitas ==*/
    public function form_filter_laporan_pelaksanaan_perkembangan_pembangunan_dan_fasilitas() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.form-filter-laporan-pelaksanaan-perkembangan-pembangunan-dan-fasilitas";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== laporan_pelaksanaan_perkembangan_pembangunan_dan_fasilitas ==*/
    public function laporan_pelaksanaan_perkembangan_pembangunan_dan_fasilitas() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.laporan-pelaksanaan-perkembangan-pembangunan-dan-fasilitas";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== form_filter_laporan_realisasi_pelaksanaan_anggaran_perjenis_belanja ==*/
    public function form_filter_laporan_realisasi_pelaksanaan_anggaran_perjenis_belanja() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.form-filter-laporan-realisasi-pelaksanaan-anggaran-perjenis-belanja";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== laporan_realisasi_pelaksanaan_anggaran_perjenis_belanja ==*/
    public function laporan_realisasi_pelaksanaan_anggaran_perjenis_belanja() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.laporan-realisasi-pelaksanaan-anggaran-perjenis-belanja";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== form_filter_laporan_penerimaan_hibah_dalam_negeri ==*/
    public function form_filter_laporan_penerimaan_hibah_dalam_negeri() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.form-filter-laporan-penerimaan-hibah-dalam-negeri";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== laporan_penerimaan_hibah_dalam_negeri ==*/
    public function laporan_penerimaan_hibah_dalam_negeri() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.laporan-penerimaan-hibah-dalam-negeri";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== form_filter_laporan_pendapatan_negara ==*/
    public function form_filter_laporan_pendapatan_negara() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.form-filter-laporan-pendapatan-negara";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== laporan_pendapatan_negara ==*/
    public function laporan_pendapatan_negara() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.laporan-pendapatan-negara";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    

    /*== form_filter_laporan_anggaran_pemeliharaan ==*/
    public function form_filter_laporan_anggaran_pemeliharaan() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.form-filter-laporan-anggaran-pemeliharaan";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== Laporan laporan_anggaran_pemeliharaan ==*/
    public function laporan_anggaran_pemeliharaan() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.laporan-anggaran-pemeliharaan";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== form_filter_laporan_anggaran_alutsista ==*/
    public function form_filter_laporan_anggaran_alutsista() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.form-filter-laporan-anggaran-alutsista";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== Laporan laporan_anggaran_alutsista ==*/
    public function laporan_anggaran_alutsista() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.laporan-anggaran-alutsista";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== Laporan form_filter_laporan_anggaran_mef ==*/
    public function form_filter_laporan_anggaran_mef() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.form-filter-laporan-anggaran-mef";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== Laporan laporan_anggaran_mef ==*/
    public function laporan_anggaran_mef() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.laporan-anggaran-mef";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== Laporan form_filter_laporan_anggaran_perbatasan ==*/
    public function form_filter_laporan_anggaran_perbatasan() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.form-filter-laporan-anggaran-perbatasan";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== Laporan laporan_anggaran_perbatasan ==*/
    public function laporan_anggaran_perbatasan() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.laporan-anggaran-perbatasan";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== Laporan form_filter_laporan_anggaran_pinjaman ==*/
    public function form_filter_laporan_anggaran_pinjaman() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.form-filter-laporan-anggaran-pinjaman";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== Laporan laporan_anggaran_pinjaman ==*/
    public function laporan_anggaran_pinjaman() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.laporan-anggaran-pinjaman";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== Laporan form_filter_laporan_anggaran_prioritas ==*/
    public function form_filter_laporan_anggaran_prioritas() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.form-filter-laporan-anggaran-prioritas";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== Laporan laporan_anggaran_prioritas ==*/
    public function laporan_anggaran_prioritas() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.laporan.laporan-anggaran-prioritas";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== Signout Action ==*/
    public function signout(Request $request) 
    {
        // destroy session
        Session::flush();

        // redirect to signin form
        return redirect('/');

    }

}