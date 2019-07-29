<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\AnggaranImport;
use App\Admin;
use Maatwebsite\Excel\Facades\Excel;
use File;
use Session;



class SatKerController extends Controller
{

	private $ctrl = 'satker';
	private $title = 'Satuan Kerja';

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

    public function import_preview(Request $request) 
    {
        //Excel::import(new AnggaranImport,request()->file('file'));
           
        //return back();


        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
 
        // menangkap file excel
        $file = $request->file('file');
 
        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
 
        // upload ke folder files di dalam folder public
        $file->move(public_path('files'),$nama_file);
 
        // import data
        //Excel::import(new AnggaranImport, public_path('/files/'.$nama_file));
        //
        $data  = $array = Excel::toArray(new AnggaranImport, public_path('/files/'.$nama_file));

        // notifikasi dengan session
        Session::flash('sukses','Data Berhasil Diimport!');

        //delete
        $myFile = public_path('files/').$nama_file;
        File::delete(public_path('files/').$nama_file);

        //print_r($data);
        
        foreach ($data as $rows) {

            //print_r($rows[1]);
            //echo "<br><br><br><br>";

            $numrow = 1;
            $i = 0;
            foreach ($rows as $cols) {
                $i++;
                if( $numrow > 1){

                    //---------- Program
                    $kode_program = $cols[0];
                    $nama_program = $cols[1];
                    $v_program = $cols[2];
                    $j_program = $cols[3];

                    if(empty($kode_program) && empty($nama_program) && empty($v_program) && empty($j_program))
                    {   
                        continue; 
                        
                    }else{

                        $data_program = array();
                        //create array
                        $data_program[$i]['kode'] = $kode_program;
                        $data_program[$i]['nama'] = $nama_program;
                        $data_program[$i]['v'] = $v_program;
                        $data_program[$i]['j'] = $j_program;

                    }

                    //---------- Kegiatan
                    $kode_keg = $cols[4];
                    $nama_keg = $cols[5];
                    $v_keg = $cols[6];
                    $j_keg = $cols[7];

                    if(empty($kode_keg) && empty($nama_keg) && empty($v_keg) && empty($j_keg))
                    {   
                        continue; 
                        
                    }else{

                        $data_keg = array();
                        //create array
                        $data_keg[$i]['kode'] = $kode_keg;
                        $data_keg[$i]['nama'] = $nama_keg;
                        $data_keg[$i]['v'] = $v_keg;
                        $data_keg[$i]['j'] = $j_keg;

                    }

                    //---------- Output
                    $kode_out = $cols[8];
                    $nama_out = $cols[9];
                    $v_out = $cols[10];
                    $j_out = $cols[11];

                    if(empty($kode_out) && empty($nama_out) && empty($v_out) && empty($j_out))
                    {   
                        continue; 
                        
                    }else{

                        $data_out = array();
                        //create array
                        $data_out[$i]['kode'] = $kode_out;
                        $data_out[$i]['nama'] = $nama_out;
                        $data_out[$i]['v'] = $v_out;
                        $data_out[$i]['j'] = $j_out;

                    }

                    //---------- Sub soutput
                    $kode_sout = $cols[12];
                    $nama_sout = $cols[13];
                    $v_sout = $cols[14];
                    $j_sout = $cols[15];

                    if(empty($kode_sout) && empty($nama_sout) && empty($v_sout) && empty($j_sout))
                    {   
                        continue; 
                        
                    }else{

                        $data_sout = array();
                        //create array
                        $data_sout[$i]['kode'] = $kode_sout;
                        $data_sout[$i]['nama'] = $nama_sout;
                        $data_sout[$i]['v'] = $v_sout;
                        $data_sout[$i]['j'] = $j_sout;

                    }

                    //---------- Komponen
                    $kode_kom = $cols[16];
                    $nama_kom = $cols[17];
                    $v_kom = $cols[18];
                    $j_kom = $cols[19];

                    if(empty($kode_kom) && empty($nama_kom) && empty($v_kom) && empty($j_kom))
                    {   
                        continue; 
                        
                    }else{

                        $data_kom = array();
                        //create array
                        $data_kom[$i]['kode'] = $kode_kom;
                        $data_kom[$i]['nama'] = $nama_kom;
                        $data_kom[$i]['v'] = $v_kom;
                        $data_kom[$i]['j'] = $j_kom;

                    }

                    //---------- Sub komponen
                    $kode_skom = $cols[20];
                    $nama_skom = $cols[21];
                    $v_skom = $cols[22];
                    $j_skom = $cols[23];

                    if(empty($kode_skom) && empty($nama_skom) && empty($v_skom) && empty($j_skom))
                    {   
                        continue; 
                        
                    }else{

                        $data_skom = array();
                        //create array
                        $data_skom[$i]['kode'] = $kode_skom;
                        $data_skom[$i]['nama'] = $nama_skom;
                        $data_skom[$i]['v'] = $v_skom;
                        $data_skom[$i]['j'] = $j_skom;

                    }

                    //---------- Akun
                    $kode_akun = $cols[24];
                    $nama_akun = $cols[25];
                    $v_akun = $cols[26];
                    $j_akun = $cols[27];

                    if(empty($kode_akun) && empty($nama_akun) && empty($v_akun) && empty($j_akun))
                    {   
                        continue; 
                        
                    }else{

                        $data_akun = array();
                        //create array
                        $data_akun[$i]['kode'] = $kode_akun;
                        $data_akun[$i]['nama'] = $nama_akun;
                        $data_akun[$i]['v'] = $v_akun;
                        $data_akun[$i]['j'] = $j_akun;

                    }


                }
                $numrow++;
            }

            foreach ($rows as $cols) {
                
                $i++;

                if( $numrow > 1){

                    //---------- Sub Sub komponen
                    $kode_sskom = $cols[28];
                    $nama_sskom = $cols[29];
                    $v_sskom = $cols[30];
                    $j_sskom = $cols[31];

                    if(empty($kode_sskom) && empty($nama_sskom) && empty($v_sskom) && empty($j_sskom))
                    {   
                        continue; 
                        
                    }else{


                        $data_sskom = array();
                        //create array
                        $data_sskom[$i]['kode'] = $kode_sskom;
                        $data_sskom[$i]['nama'] = $nama_sskom;
                        $data_sskom[$i]['v'] = $v_sskom;
                        $data_sskom[$i]['j'] = $j_sskom;

                        //print_r($kode_sskom);

                        //sub sub komponen
                        $responses_sskom['results']= $data_sskom;
                        $j_sskom = json_encode($responses_sskom);
                        $datapage[ 'ssk' ] = json_decode($j_sskom);
                    }


                }
                $numrow++;
            }
        }

        //program
        $responses_pro['results']= $data_program;
        $j_program = json_encode($responses_pro);
        $datapage[ 'program' ] = json_decode($j_program);
        //kegiatan
        $responses_keg['results']= $data_keg;
        $j_keg = json_encode($responses_keg);
        $datapage[ 'kegiatan' ] = json_decode($j_keg);
        //ouput
        $responses_out['results']= $data_out;
        $j_out = json_encode($responses_out);
        $datapage[ 'output' ] = json_decode($j_out);
        //sub ouput
        $responses_sout['results']= $data_sout;
        $j_sout = json_encode($responses_sout);
        $datapage[ 'soutput' ] = json_decode($j_sout);
        //komponen
        $responses_kom['results']= $data_kom;
        $j_kom = json_encode($responses_kom);
        $datapage[ 'komponen' ] = json_decode($j_kom);
        //sub komponen
        $responses_skom['results']= $data_skom;
        $j_skom = json_encode($responses_skom);
        $datapage[ 'skomponen' ] = json_decode($j_skom);
        //akun
        $responses_akun['results']= $data_akun;
        $j_akun = json_encode($responses_akun);
        $datapage[ 'akun' ] = json_decode($j_akun);
        

        // set data view
        $datapage[ 'content_view' ] = "backend.$this->ctrl.preview-excel";
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