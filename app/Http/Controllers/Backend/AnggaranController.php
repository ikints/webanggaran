<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Imports\AnggaranImport;
use Maatwebsite\Excel\Facades\Excel;
use File;
use Session;

class AnggaranController extends Controller
{
    private $ctrl 	= 'home';
    private $cerror = 'error';
    private $title 	= 'Home';
    
	public function import(Request $request) 
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
		Excel::import(new AnggaranImport, public_path('/files/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data Berhasil Diimport!');


		//delete
		//$myFile = public_path('files/').$nama_file;
		File::delete(public_path('files/').$nama_file);

		//echo $myFile;
 
		// alihkan halaman kembali
		return redirect('/cms/tambah-sumber-anggaran');

    }

}