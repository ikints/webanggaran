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

	        if($username != '' && $password != ''){
	          
	           Session::put('name',$username);

	           switch($username){
	           		//Kemhan (Admin)
					case 'kemhan_admin' : 
						Session::put('loginKemhan',TRUE); 
						Session::put('status_user','Kementerian Pertahanan Admin');
						Session::put('level', 1);
						Session::put('username', $username);
						return redirect('/cms/tahun-anggaran')->with('success','Signin Berhasil');
					break;

					//UO
					case 'kemhan_uo' : 
						Session::put('loginUO',TRUE); 
						Session::put('status_user','Unit Organisasi Kementerian Pertahanan');
						Session::put('level', 2);
						Session::put('username', $username);
						return redirect('/cms/kemhan/uo/tahun-anggaran')->with('success','Signin Berhasil');
					break;

					case 'mabes_tni_uo' : 
						Session::put('loginUO',TRUE); 
						Session::put('status_user','Unit Organisasi Mabes TNI');
						Session::put('level', 2);
						Session::put('username', $username);
						return redirect('/cms/mabes-tni/uo/tahun-anggaran')->with('success','Signin Berhasil');
					break;

					case 'tni_ad_uo' : 
						Session::put('loginUO',TRUE); 
						Session::put('status_user','Unit Organisasi TNI AD');
						Session::put('level', 2);
						Session::put('username', $username);
						return redirect('/cms/tni-ad/uo/tahun-anggaran')->with('success','Signin Berhasil');
					break;

					case 'tni_au_uo' : 
						Session::put('loginUO',TRUE); 
						Session::put('status_user','Unit Organisasi TNI AU');
						Session::put('level', 2);
						Session::put('username', $username);
						return redirect('/cms/tni-au/uo/tahun-anggaran')->with('success','Signin Berhasil');
					break;

					case 'tni_al_uo' : 
						Session::put('loginUO',TRUE); 
						Session::put('status_user','Unit Organisasi TNI AL');
						Session::put('level', 2);
						Session::put('username', $username);
						return redirect('/cms/tni-al/uo/tahun-anggaran')->with('success','Signin Berhasil');
					break;

					//Kotama
					case 'kotama' : 
						Session::put('loginKotama',TRUE); 
						Session::put('status_user','Kotama');
						Session::put('level', 3);
						Session::put('username', $username);
						return redirect('/cms/kotama/tahun-anggaran')->with('success','Signin Berhasil');
					break;

					//SatKer
					case 'satker' : 
						Session::put('loginSatKer',TRUE); 
						Session::put('status_user','Satuan Kerja');
						Session::put('level', 4);
						Session::put('username', $username);
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