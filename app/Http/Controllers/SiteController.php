<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class SiteController extends BaseController {

	public function haloJuga()
	{
		return view('halo_juga');
	}

	public function task2()
	{
		return view('task2');
	}

	public function ptask2()
	{
		return view('ptask2');
	}
}	