<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Admin;


class UserController extends Controller
{
    private $ctrl = 'user';
	private $title = 'User';


	/*== Signin Form Page ==*/
	public function signin_form() 
	{
		//check session member
		if(!Session::get('loginKemhan')){
			// set data view
			$data[ 'content_view' ] = "backend.$this->ctrl.signin";
			$data[ 'page_title' ] = $this->title;
			$data[ 'menu' ] = $this->ctrl;
			$data[ 'ctrl' ] = $this->ctrl;

			// load view
			return view( $data[ 'content_view' ], $data );
		}
		else {

			return redirect('/cms/dashboard');

		}

		

	}

	/**
    * Proses Signin
    *
    */
	public function signin(Request $request) 
	{
		
		//check session member
		if((!Session::get('loginKemhan')) || (!Session::get('loginUO')) || (!Session::get('loginKotama')) || (!Session::get('loginSatKer'))){

			$username = $request->get('username');
			$password = $request->get('password');
			$level	  = $request->get('level');

	        if($username != '' && $password != '' && $level != ''){
	          
	           Session::put('name',$username);

	           switch($level){
					case '1' : 
						Session::put('loginKemhan',TRUE); 
						Session::put('status_user','Kemhan');
						Session::put('level', $level);
						return redirect('/cms/tahun-anggaran')->with('success','Signin Berhasil');
					break;
					case '2' : 
						Session::put('loginUO',TRUE); 
						Session::put('status_user','Unit Organisasi');
						Session::put('level', $level);
						return redirect('/cms/uo/tahun-anggaran')->with('success','Signin Berhasil');
					break;
					case '3' : 
						Session::put('loginKotama',TRUE); 
						Session::put('status_user','Kotama');
						Session::put('level', $level);
						return redirect('/cms/kotama/tahun-anggaran')->with('success','Signin Berhasil');
					break;
					case '4' : 
						Session::put('loginSatKer',TRUE); 
						Session::put('status_user','Satuan Kerja');
						Session::put('level', $level);
						return redirect('/cms/satker/tahun-anggaran')->with('success','Signin Berhasil');
					break;
				}

			   

	        } else {
	          
	          // set data view
				$datav[ 'content_view' ] = "backend.$this->ctrl.signin";
				$datav[ 'page_title' ] = $this->title;
				$datav[ 'menu' ] = $this->ctrl;
				$datav[ 'ctrl' ] = $this->ctrl;
				$datav[ 'error' ] = 'Salah Username atau password';

				// load view
				return view( $datav[ 'content_view' ], $datav );
	          
	        }


		}else{

			return redirect('/');
			
		}

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