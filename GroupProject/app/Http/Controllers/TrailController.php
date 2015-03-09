<?php namespace App\Http\Controllers;
use DB;
use App\Models\Mountain;
use App\Models\Trail;
use App\Models\Image;

class TrailController extends Controller {

	// public function getAll() {
	// 	return view('Trails');
	// }

	public function getTrail($mountain_id, $trail_id) {

		// call weather function
		$weather = Controller::getWeather();

		$mountain = new Mountain($mountain_id);
		$trail = new Trail($trail_id);
		$img = new Image($trail->image_id);
		// $imageURL = $img->image_path;

		//grabbing comments for specific trail
		$comment = Trail::getComments($trail_id);
		
		return view('Trails', ["comment" => $comment])->with('mountain', $mountain)->with('trail', $trail)->with('weather', $weather);

	}

	public function randomTrail ($trail_id) {
		$trail = new Trail($trail_id);
		$mountain_id = $trail->mountain_id;
		return redirect('/Trails/' . $mountain_id . '/' . $trail_id);
	}

	// public function getComments($trail_id) {
	// 	$comment = Trail::getComments($trail_id);
	// 	return view("Trails",["comment" => $comment]);
	// }

}