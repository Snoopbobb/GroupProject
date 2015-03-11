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
		// put me in the array 'imageURL' => $imageURL,
		
		return view('Trails', [ "comment" => $comment])->with('mountain', $mountain)->with('trail', $trail)->with('weather', $weather);

	}

	public function randomTrail ($trail_id) {
		$trail = new Trail($trail_id);
		$mountain_id = $trail->mountain_id;
		return redirect('/Trails/' . $mountain_id . '/' . $trail_id);
	}

	public function addComment() {
		$user_id = Request::input('user_id');
		$message = Request::input('message');
		$trail_id = Request::input('trail_id');
		$comment_id = Trail::addComment($user_id, $trail_id, $message);
		// return redirect()->back();
		return json_encode(['comment_id' => $comment_id]);

	}


	public function deleteComment() {
		$comment_id = Request::input('comment_id');
		Trail::deleteComment($comment_id);
		return ['foo'];

	}

}