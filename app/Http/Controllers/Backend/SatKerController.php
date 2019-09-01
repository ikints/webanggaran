<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\AnggaranImport;
use App\AnggaranTemp;
use App\Anggaran;
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

        //ID Template
        $pos_template = rand(0, 99999999);
        $pos_id_tahun = 1;
        //Program
        foreach ($data as $rows) {

            $numrow = 1;
            $i = 0;
            
            $data_program = array();
            foreach ($rows as $cols) {
                
                $i++;

                if( $numrow > 1){

                    $kode_program = $cols[0];
                    $nama_program = $cols[1];
                    $v_program = $cols[2];
                    $j_program = $cols[3];

                    if(empty($kode_program) && empty($nama_program) && empty($v_program) && empty($j_program))
                    {   
                        continue; 
                        
                    }else{

                        
                        //create array
                        $data_program[$i]['kode'] = $kode_program;
                        $data_program[$i]['nama'] = $nama_program;
                        $data_program[$i]['v'] = $v_program;
                        $data_program[$i]['j'] = $j_program;

                        /*$kode_pos = new Anggaran;
                        $kode_pos->subfung_parent_id = 12;
                        $kode_pos->prog_parent_id = 14;
                        $kode_pos->subprog_parent_id = 0;
                        $kode_pos->giat_parent_id = 0;
                        $kode_pos->output_parent_id = 0;
                        $kode_pos->komp_parent_id = 1;
                        $kode_pos->sub_komp_parent_id = 0;
                        $kode_pos->pos_kode = 22;
                        $kode_pos->pos_nama = $nama_program;
                        $kode_pos->pos_level = 1;
                        $kode_pos->save();*/

                        $kode_prog = explode('.', $kode_program);

                        $kode_pos = new AnggaranTemp;
                        $kode_pos->pos_template = $pos_template;
                        $kode_pos->pos_id_tahun = $pos_id_tahun;
                        $kode_pos->pos_parent_kode = 0;
                        $kode_pos->pos_kode = $kode_prog[2];
                        $kode_pos->pos_nama = $nama_program;
                        $kode_pos->pos_volume = $v_program;
                        $kode_pos->pos_jumlah = $j_program;
                        $kode_pos->pos_level = 1;
                        $kode_pos->save();

                    }

                 }
                $numrow++;
            }

        }

        //Kegiatan
        foreach ($data as $rows) {
            $numrow = 1;
            $i = 0;
            
            $data_keg = array();
            foreach ($rows as $cols) {
                
                $i++;

                if( $numrow > 1){
                    //lokasi kode
                    $kode_all = $cols[52];

                    $kode_keg = $cols[4];
                    $nama_keg = $cols[5];
                    $v_keg = $cols[6];
                    $j_keg = $cols[7];

                    if(empty($kode_keg) && empty($nama_keg) && empty($v_keg) && empty($j_keg))
                    {   
                        continue; 
                        
                    }else{

                        //create array
                        $data_keg[$i]['kode'] = $kode_keg;
                        $data_keg[$i]['nama'] = $nama_keg;
                        $data_keg[$i]['v'] = $v_keg;
                        $data_keg[$i]['j'] = $j_keg;

                        $pos_p = explode('/', $kode_all);
                        $pos_parent_kode = explode('.', $pos_p[0]);

                        $kode_pos = new AnggaranTemp;
                        $kode_pos->pos_template = $pos_template;
                        $kode_pos->pos_id_tahun = $pos_id_tahun;
                        $kode_pos->pos_parent_kode = $pos_parent_kode[2];
                        $kode_pos->pos_kode = $kode_keg;
                        $kode_pos->pos_nama = $nama_keg;
                        $kode_pos->pos_volume = $v_keg;
                        $kode_pos->pos_jumlah = $j_keg;
                        $kode_pos->pos_level = 2;
                        $kode_pos->save();

                    }


                 }
                $numrow++;
            }

            
        }

        //Output
        foreach ($data as $rows) {
            $numrow = 1;
            $i = 0;
            
            $data_out = array();
            foreach ($rows as $cols) {
                
                $i++;

                if( $numrow > 1){
                    //lokasi kode
                    $kode_all = $cols[52];

                    $kode_out = $cols[8];
                    $nama_out = $cols[9];
                    $v_out = $cols[10];
                    $j_out = $cols[11];

                    if(empty($kode_out) && empty($nama_out) && empty($v_out) && empty($j_out))
                    {   
                        continue; 
                        
                    }else{

                        
                        //create array
                        $data_out[$i]['kode'] = $kode_out;
                        $data_out[$i]['nama'] = $nama_out;
                        $data_out[$i]['v'] = $v_out;
                        $data_out[$i]['j'] = $j_out;

                        $pos_p = explode('/', $kode_all);

                        $kode_pos = new AnggaranTemp;
                        $kode_pos->pos_template = $pos_template;
                        $kode_pos->pos_id_tahun = $pos_id_tahun;
                        $kode_pos->pos_parent_kode = $pos_p[1];
                        $kode_pos->pos_kode = $kode_out;
                        $kode_pos->pos_nama = $nama_out;
                        $kode_pos->pos_volume = $v_out;
                        $kode_pos->pos_jumlah = $j_out;
                        $kode_pos->pos_level = 3;
                        $kode_pos->save();

                    }


                 }
                $numrow++;
            }

        }

        //Sub soutput
        foreach ($data as $rows) {
            $numrow = 1;
            $i = 0;
            
            $data_sout = array();
            foreach ($rows as $cols) {
                
                $i++;

                if( $numrow > 1){
                    //lokasi kode
                    $kode_all = $cols[52];

                    $kode_sout = $cols[12];
                    $nama_sout = $cols[13];
                    $v_sout = $cols[14];
                    $j_sout = $cols[15];

                    if(empty($kode_sout) && empty($nama_sout) && empty($v_sout) && empty($j_sout))
                    {   
                        continue; 
                        
                    }else{

                        
                        //create array
                        $data_sout[$i]['kode'] = $kode_sout;
                        $data_sout[$i]['nama'] = $nama_sout;
                        $data_sout[$i]['v'] = $v_sout;
                        $data_sout[$i]['j'] = $j_sout;

                        $pos_p = explode('/', $kode_all);

                        $kode_pos = new AnggaranTemp;
                        $kode_pos->pos_template = $pos_template;
                        $kode_pos->pos_id_tahun = $pos_id_tahun;
                        $kode_pos->pos_parent_kode = $pos_p[2];
                        $kode_pos->pos_kode = $kode_sout;
                        $kode_pos->pos_nama = $nama_sout;
                        $kode_pos->pos_volume = $v_sout;
                        $kode_pos->pos_jumlah = $j_sout;
                        $kode_pos->pos_level = 4;
                        $kode_pos->save();

                    }


                 }
                $numrow++;
            }

        }

        //Komponen
        foreach ($data as $rows) {
            $numrow = 1;
            $i = 0;
            
            $data_kom = array();
            foreach ($rows as $cols) {
                
                $i++;

                if( $numrow > 1){
                    //lokasi kode
                    $kode_all = $cols[52];

                    $kode_kom = $cols[16];
                    $nama_kom = $cols[17];
                    $v_kom = $cols[18];
                    $j_kom = $cols[19];

                    if(empty($kode_kom) && empty($nama_kom) && empty($v_kom) && empty($j_kom))
                    {   
                        continue; 
                        
                    }else{

                        
                        //create array
                        $data_kom[$i]['kode'] = $kode_kom;
                        $data_kom[$i]['nama'] = $nama_kom;
                        $data_kom[$i]['v'] = $v_kom;
                        $data_kom[$i]['j'] = $j_kom;

                        $pos_p = explode('/', $kode_all);

                        $kode_pos = new AnggaranTemp;
                        $kode_pos->pos_template = $pos_template;
                        $kode_pos->pos_id_tahun = $pos_id_tahun;
                        $kode_pos->pos_parent_kode = $pos_p[3];
                        $kode_pos->pos_kode = $kode_kom;
                        $kode_pos->pos_nama = $nama_kom;
                        $kode_pos->pos_volume = $v_kom;
                        $kode_pos->pos_jumlah = $j_kom;
                        $kode_pos->pos_level = 5;
                        $kode_pos->save();

                    }

                }
                $numrow++;
            }

        }

        //Sub komponen
        foreach ($data as $rows) {
            $numrow = 1;
            $i = 0;
            
            $data_skom = array();
            foreach ($rows as $cols) {
                
                $i++;

                if( $numrow > 1){
                    //lokasi kode
                    $kode_all = $cols[52];

                    $kode_skom = $cols[20];
                    $nama_skom = $cols[21];
                    $v_skom = $cols[22];
                    $j_skom = $cols[23];

                    if(empty($kode_skom) && empty($nama_skom) && empty($v_skom) && empty($j_skom))
                    {   
                        continue; 
                        
                    }else{

                        
                        //create array
                        $data_skom[$i]['kode'] = $kode_skom;
                        $data_skom[$i]['nama'] = $nama_skom;
                        $data_skom[$i]['v'] = $v_skom;
                        $data_skom[$i]['j'] = $j_skom;

                        $pos_p = explode('/', $kode_all);

                        $kode_pos = new AnggaranTemp;
                        $kode_pos->pos_template = $pos_template;
                        $kode_pos->pos_id_tahun = $pos_id_tahun;
                        $kode_pos->pos_parent_kode = $pos_p[4];
                        $kode_pos->pos_kode = $kode_skom;
                        $kode_pos->pos_nama = $nama_skom;
                        $kode_pos->pos_volume = $v_skom;
                        $kode_pos->pos_jumlah = $j_skom;
                        $kode_pos->pos_level = 6;
                        $kode_pos->save();

                    }


                }
                $numrow++;
            }

        }

        //Akun
        foreach ($data as $rows) {
            $numrow = 1;
            $i = 0;
            
            $data_akun = array();
            foreach ($rows as $cols) {
                
                $i++;

                if( $numrow > 1){
                    //lokasi kode
                    $kode_all = $cols[52];

                    $kode_akun = $cols[24];
                    $nama_akun = $cols[25];
                    $v_akun = $cols[26];
                    $j_akun = $cols[27];

                    if(empty($kode_akun) && empty($nama_akun) && empty($v_akun) && empty($j_akun))
                    {   
                        continue; 
                        
                    }else{

                        
                        //create array
                        $data_akun[$i]['kode'] = $kode_akun;
                        $data_akun[$i]['nama'] = $nama_akun;
                        $data_akun[$i]['v'] = $v_akun;
                        $data_akun[$i]['j'] = $j_akun;

                        $pos_p = explode('/', $kode_all);

                        $kode_pos = new AnggaranTemp;
                        $kode_pos->pos_template = $pos_template;
                        $kode_pos->pos_id_tahun = $pos_id_tahun;
                        $kode_pos->pos_parent_kode = $pos_p[5];
                        $kode_pos->pos_kode = $kode_akun;
                        $kode_pos->pos_nama = $nama_akun;
                        $kode_pos->pos_volume = $v_akun;
                        $kode_pos->pos_jumlah = $j_akun;
                        $kode_pos->pos_level = 7;
                        $kode_pos->save();

                    }

                }
                $numrow++;
            }

        }

        //Sub Sub komponen
        foreach ($data as $rows) {
            $numrow = 1;
            $i = 0;
            
            $data_sskom = array();
            foreach ($rows as $cols) {
                
                $i++;

                if( $numrow > 1){
                    //lokasi kode
                    $kode_all = $cols[52];

                    $kode_sskom = $cols[28];
                    $nama_sskom = $cols[29];
                    $v_sskom = $cols[30];
                    $j_sskom = $cols[31];

                    if(empty($kode_sskom) && empty($nama_sskom) && empty($v_sskom) && empty($j_sskom))
                    {   
                        continue; 
                        
                    }else{


                        //create array
                        $data_sskom[$i]['kode'] = $kode_sskom;
                        $data_sskom[$i]['nama'] = $nama_sskom;
                        $data_sskom[$i]['v'] = $v_sskom;
                        $data_sskom[$i]['j'] = $j_sskom;

                        $pos_p = explode('/', $kode_all);

                        $kode_pos = new AnggaranTemp;
                        $kode_pos->pos_template = $pos_template;
                        $kode_pos->pos_id_tahun = $pos_id_tahun;
                        $kode_pos->pos_parent_kode = $pos_p[6];
                        $kode_pos->pos_kode = $kode_sskom;
                        $kode_pos->pos_nama = $nama_sskom;
                        $kode_pos->pos_volume = $v_sskom;
                        $kode_pos->pos_jumlah = $j_sskom;
                        $kode_pos->pos_level = 8;
                        $kode_pos->save();
                    }

                }
                $numrow++;
            }

        }

        //SSKI
        foreach ($data as $rows) {
            $numrow = 1;
            $i = 0;
            
            $data_sski = array();
            foreach ($rows as $cols) {
                
                $i++;

                if( $numrow > 1){
                    //lokasi kode
                    $kode_all = $cols[52];

                    $kode_sski = $cols[32];
                    $nama_sski = $cols[33];
                    $v_sski = $cols[34];
                    $j_sski = $cols[35];

                    if(empty($kode_sski) && empty($nama_sski) && empty($v_sski) && empty($j_sski))
                    {   
                        continue; 
                        
                    }else{


                        //create array
                        $data_sski[$i]['kode'] = $kode_sski;
                        $data_sski[$i]['nama'] = $nama_sski;
                        $data_sski[$i]['v'] = $v_sski;
                        $data_sski[$i]['j'] = $j_sski;

                        $pos_p = explode('/', $kode_all);

                        $kode_pos = new AnggaranTemp;
                        $kode_pos->pos_template = $pos_template;
                        $kode_pos->pos_id_tahun = $pos_id_tahun;
                        $kode_pos->pos_parent_kode = $pos_p[7];
                        $kode_pos->pos_kode = $kode_sski;
                        $kode_pos->pos_nama = $nama_sski;
                        $kode_pos->pos_volume = $v_sski;
                        $kode_pos->pos_jumlah = $j_sski;
                        $kode_pos->pos_level = 9;
                        $kode_pos->save();
                    }

                }
                $numrow++;
            }

        }

        //SSKII
        foreach ($data as $rows) {
            $numrow = 1;
            $i = 0;
            
            $data_sskii = array();
            foreach ($rows as $cols) {
                
                $i++;

                if( $numrow > 1){
                    //lokasi kode
                    $kode_all = $cols[52];

                    $kode_sskii = $cols[36];
                    $nama_sskii = $cols[37];
                    $v_sskii = $cols[38];
                    $j_sskii = $cols[39];

                    if(empty($kode_sskii) && empty($nama_sskii) && empty($v_sskii) && empty($j_sskii))
                    {   
                        continue; 
                        
                    }else{


                        //create array
                        $data_sskii[$i]['kode'] = $kode_sskii;
                        $data_sskii[$i]['nama'] = $nama_sskii;
                        $data_sskii[$i]['v'] = $v_sskii;
                        $data_sskii[$i]['j'] = $j_sskii;

                        $pos_p = explode('/', $kode_all);

                        $kode_pos = new AnggaranTemp;
                        $kode_pos->pos_template = $pos_template;
                        $kode_pos->pos_id_tahun = $pos_id_tahun;
                        $kode_pos->pos_parent_kode = $pos_p[8];
                        $kode_pos->pos_kode = $kode_sskii;
                        $kode_pos->pos_nama = $nama_sskii;
                        $kode_pos->pos_volume = $v_sskii;
                        $kode_pos->pos_jumlah = $j_sskii;
                        $kode_pos->pos_level = 10;
                        $kode_pos->save();

                    }   

                }
                $numrow++;
            }

        }

        //sskiii
        foreach ($data as $rows) {
            $numrow = 1;
            $i = 0;
            
            $data_sskiii = array();
            foreach ($rows as $cols) {
                
                $i++;

                if( $numrow > 1){
                    //lokasi kode
                    $kode_all = $cols[52];

                    $kode_sskiii = $cols[40];
                    $nama_sskiii = $cols[41];
                    $v_sskiii = $cols[42];
                    $j_sskiii = $cols[43];

                    if(empty($kode_sskiii) && empty($nama_sskiii) && empty($v_sskiii) && empty($j_sskiii))
                    {   
                        continue; 
                        
                    }else{


                        //create array
                        $data_sskiii[$i]['kode'] = $kode_sskiii;
                        $data_sskiii[$i]['nama'] = $nama_sskiii;
                        $data_sskiii[$i]['v'] = $v_sskiii;
                        $data_sskiii[$i]['j'] = $j_sskiii;

                        $pos_p = explode('/', $kode_all);

                        $kode_pos = new AnggaranTemp;
                        $kode_pos->pos_template = $pos_template;
                        $kode_pos->pos_id_tahun = $pos_id_tahun;
                        $kode_pos->pos_parent_kode = $pos_p[9];
                        $kode_pos->pos_kode = $kode_sskiii;
                        $kode_pos->pos_nama = $nama_sskiii;
                        $kode_pos->pos_volume = $v_sskiii;
                        $kode_pos->pos_jumlah = $j_sskiii;
                        $kode_pos->pos_level = 11;
                        $kode_pos->save();

                    }

                }
                $numrow++;
            }

        }

        //sskiv
        foreach ($data as $rows) {
            $numrow = 1;
            $i = 0;
            
            $data_sskiv = array();
            foreach ($rows as $cols) {
                
                $i++;

                if( $numrow > 1){
                    //lokasi kode
                    $kode_all = $cols[52];

                    $kode_sskiv = $cols[44];
                    $nama_sskiv = $cols[45];
                    $v_sskiv = $cols[46];
                    $j_sskiv = $cols[47];

                    if(empty($kode_sskiv) && empty($nama_sskiv) && empty($v_sskiv) && empty($j_sskiv))
                    {   
                        continue; 
                        
                    }else{


                        //create array
                        $data_sskiv[$i]['kode'] = $kode_sskiv;
                        $data_sskiv[$i]['nama'] = $nama_sskiv;
                        $data_sskiv[$i]['v'] = $v_sskiv;
                        $data_sskiv[$i]['j'] = $j_sskiv;

                        $pos_p = explode('/', $kode_all);

                        $kode_pos = new AnggaranTemp;
                        $kode_pos->pos_template = $pos_template;
                        $kode_pos->pos_id_tahun = $pos_id_tahun;
                        $kode_pos->pos_parent_kode = $pos_p[10];
                        $kode_pos->pos_kode = $kode_sskiv;
                        $kode_pos->pos_nama = $nama_sskiv;
                        $kode_pos->pos_volume = $v_sskiv;
                        $kode_pos->pos_jumlah = $j_sskiv;
                        $kode_pos->pos_level = 12;
                        $kode_pos->save();

                    }

                }
                $numrow++;
            }

        }

        //sskv
        foreach ($data as $rows) {
            $numrow = 1;
            $i = 0;
            
            $data_sskv = array();
            foreach ($rows as $cols) {
                
                $i++;

                if( $numrow > 1){
                    //lokasi kode
                    $kode_all = $cols[52];

                    $kode_sskv = $cols[48];
                    $nama_sskv = $cols[49];
                    $v_sskv = $cols[50];
                    $j_sskv = $cols[51];

                    if(empty($kode_sskv) && empty($nama_sskv) && empty($v_sskv) && empty($j_sskv))
                    {   
                        continue; 
                        
                    }else{


                        //create array

                        $data_sskv[$i]['kode'] = $kode_sskv;
                        $data_sskv[$i]['nama'] = $nama_sskv;
                        $data_sskv[$i]['v'] = $v_sskv;
                        $data_sskv[$i]['j'] = $j_sskv;

                        $pos_p = explode('/', $kode_all);

                        if (empty($pos_p[11])) :
                            $pos_parent_kode = '-';
                        else :
                            $pos_parent_kode = $pos_p[11];
                        endif;

                        $kode_pos = new AnggaranTemp;
                        $kode_pos->pos_template = $pos_template;
                        $kode_pos->pos_id_tahun = $pos_id_tahun;
                        $kode_pos->pos_parent_kode = $pos_parent_kode;
                        $kode_pos->pos_kode = $kode_sskv;
                        $kode_pos->pos_nama = $nama_sskv;
                        $kode_pos->pos_volume = $v_sskv;
                        $kode_pos->pos_jumlah = $j_sskv;
                        $kode_pos->pos_level = 13;
                        $kode_pos->save();

                    }

                }
                $numrow++;
            }

        }

        //kode
        foreach ($data as $rows) {
            $numrow = 1;
            $i = 0;
            
            $data_kode = array();
            foreach ($rows as $cols) {
                
                $i++;

                if( $numrow > 1){
                    //lokasi kode
                    $kode_all = $cols[52];

                    if(empty($kode_all))
                    {   
                        continue; 
                        
                    }else{


                        //create array

                        $data_kode[$i]['kode'] = $kode_all;

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
        //sub sub komponen
        $responses_sskom['results']= $data_sskom;
        $j_sskom = json_encode($responses_sskom);
        $datapage[ 'ssk' ] = json_decode($j_sskom);
        //sski
        $responses_sski['results']= $data_sski;
        $j_sski = json_encode($responses_sski);
        $datapage[ 'sski' ] = json_decode($j_sski);
        //sskii
        $responses_sskii['results']= $data_sskii;
        $j_sskii = json_encode($responses_sskii);
        $datapage[ 'sskii' ] = json_decode($j_sskii);
        //sskiii
        $responses_sskiii['results']= $data_sskiii;
        $j_sskiii = json_encode($responses_sskiii);
        $datapage[ 'sskiii' ] = json_decode($j_sskiii);
        //sskiv
        $responses_sskiv['results']= $data_sskiv;
        $j_sskiv = json_encode($responses_sskiv);
        $datapage[ 'sskiv' ] = json_decode($j_sskiv);
        //sskv
        $responses_sskv['results']= $data_sskv;
        $j_sskv = json_encode($responses_sskv);
        $datapage[ 'sskv' ] = json_decode($j_sskv);
        //kode
        $responses_kode['results']= $data_kode;
        $j_kode = json_encode($responses_kode);
        $datapage[ 'kode' ] = json_decode($j_kode);

        //print_r($j_kode);


        $datapage['id_template'] = $pos_template;
        // set data view
        $datapage[ 'content_view' ] = "backend.$this->ctrl.preview-excel";
        $datapage[ 'page_title' ]   = $this->title;
        $datapage[ 'ctrl' ]         = $this->ctrl;
        $datapage[ 'title' ]        = $this->title;
        

        // load view
        return view($datapage[ 'content_view' ], $datapage);


    }

    /*== Import Insert ==*/
    public function import_insert(Request $request) 
    {



    // set data view
    $datapage[ 'content_view' ] = "backend.$this->ctrl.insert-excel";
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