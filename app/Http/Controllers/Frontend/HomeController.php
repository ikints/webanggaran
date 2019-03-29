<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;


class HomeController extends Controller
{
    private $ctrl 	= 'home';
    private $cerror = 'error';
    private $title 	= 'Home';
    
    /*== Index page ==*/
	public function index() 
	{

    // set data view
    $datapage[ 'content_view' ] = "frontend.$this->ctrl.index";
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
    $datapage[ 'content_view' ] = "frontend.$this->ctrl.dashboard";
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
    $datapage[ 'content_view' ] = "frontend.$this->ctrl.rinciananggaran";
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
    $datapage[ 'content_view' ] = "frontend.$this->ctrl.rinciananggarandetail";
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
    $datapage[ 'content_view' ] = "frontend.$this->ctrl.input-anggaran";
    $datapage[ 'page_title' ]   = $this->title;
    $datapage[ 'ctrl' ]         = $this->ctrl;
    $datapage[ 'title' ]        = $this->title;

    // load view
    return view($datapage[ 'content_view' ], $datapage);

    }

}