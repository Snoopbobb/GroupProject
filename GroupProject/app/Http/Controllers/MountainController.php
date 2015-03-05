<?php namespace App\Http\Controllers;
use DB;

class MountainController extends Controller {

	public function getAll() {
		return view('Mountain');
	}

}