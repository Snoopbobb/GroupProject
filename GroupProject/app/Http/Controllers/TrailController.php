<?php namespace App\Http\Controllers;
use DB;

class TrailController extends Controller {

	public function getAll() {
		return view('Trails');
	}

	public function getTrail($mountain_id, $trail_id) {

		$mountain = new Mountain($mountain_id);
		$trails = new Trail($mountain_id);

	}
}