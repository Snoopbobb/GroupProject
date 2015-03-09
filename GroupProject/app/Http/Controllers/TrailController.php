<?php namespace App\Http\Controllers;
use DB;
use App\Models\Mountain;
use App\Models\Trail;
use App\Models\Image;

class TrailController extends Controller {

	public function getAll() {
		return view('Trails');
	}

	public function getTrail($mountain_id, $trail_id) {

		// call weather function
		$weather = Controller::getWeather();

		$mountain = new Mountain($mountain_id);
		$trail = new Trail($trail_id);
		$img = new Image($trail->image_id);
		// $imageURL = $img->image_path;		
		
		return view('Trails')->with('mountain', $mountain)->with('trail', $trail)->with('weather', $weather);

	}
}