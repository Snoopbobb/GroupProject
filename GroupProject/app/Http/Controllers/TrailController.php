<?php namespace App\Http\Controllers;
use DB;

class TrailController extends Controller {

	public function getAll() {
		return view('Trails');
	}

}