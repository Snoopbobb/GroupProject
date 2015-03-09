<?php namespace App\Http\Controllers;
use DB;
use App\Models\Mountain;
use App\Models\Trail;
use App\Models\Image;
use Request;

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

	public function addComment($user_id) {
		$comment = Request::input('comment');
		$trail_id = Request::input('trail_id');
		// $user_id = Auth::user()->user_id;
		$new_comment = Trail::addComment($user_id, $trail_id, $comment);
		return redirect()->back();

	}

}