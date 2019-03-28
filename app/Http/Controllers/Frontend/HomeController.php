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

}