<?php namespace App\Http\Controllers;
use Request;
use DB;
use App\Models\Mountain;
use App\Models\Trail;
use App\Models\Image;

class HomeController extends Controller {

	
	public function index()
	{	
		// call weather function
		$weather = Controller::getWeather();
		
		return view('home')->with('weather', $weather);
	}

	public function getImage() {
		$mountain_id = Request::input('mountain_id');
		$mountain = new Mountain($mountain_id);
		$image = $mountain->image_id;
		$img = new Image($image);
		$imageURL = $img->image_path;

		return json_encode(['imageURL' => $imageURL]);
	}
}
