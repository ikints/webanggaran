<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Admin;


class HomeController extends Controller
{

	private $ctrl = 'home';
	private $title = 'Home';

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

    /*== Anggaran page ==*/
    public function anggaran() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.rinciananggaran";
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

    /*== Anggaran Detail page ==*/
    public function anggaran_detail() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.rinciananggarandetail";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

    /*== Anggaran page ==*/
    public function input_anggaran() 
    {

    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.input-anggaran";
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


    //===================================Laporan========================
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


}