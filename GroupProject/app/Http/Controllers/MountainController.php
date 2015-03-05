<?php namespace App\Http\Controllers;
use DB;
use App\Models\Mountain;
use App\Models\Trail;

class MountainController extends Controller {

	public function getAll() {
		return view('Mountain', ['title' => 'All The Mountains', 'description' => 'some random Mountains yo']);
	}

	public function getMountain($mountain_id) {


		switch ($mountain_id) {

			case "1":
				$mountain = new Mountain(2);
				$trail = new Trail(2);
				return view('Mountain', ['mountain' => $mountain, 'trail' => $trail]);
			break;
			case "2":
				$mountain = new Mountain(2);
				$trail = new Trail(2);
				return view('Mountain', ['mountain' => $mountain, 'trail' => $trail]);
			break;
			case "3":
				$mountain = new Mountain(2);
				$trail = new Trail(2);
				return view('Mountain', ['mountain' => $mountain, 'trail' => $trail]);
			break;
			case "4":
				$mountain = new Mountain(2);
				$trail = new Trail(2);
				return view('Mountain', ['mountain' => $mountain, 'trail' => $trail]);
			break;			
			case "5":
				$mountain = new Mountain(2);
				$trail = new Trail(2);
				return view('Mountain', ['mountain' => $mountain, 'trail' => $trail]);
			break;			
			case "6":
				$mountain = new Mountain(2);
				$trail = new Trail(2);
				return view('Mountain', ['mountain' => $mountain, 'trail' => $trail]);
			break;			
			case "7":
				$mountain = new Mountain(2);
				$trail = new Trail(2);
				return view('Mountain', ['mountain' => $mountain, 'trail' => $trail]);
			break;
			case "8":
				$mountain = new Mountain(2);
				$trail = new Trail(2);
				return view('Mountain', ['mountain' => $mountain, 'trail' => $trail]);
			break;
			case "9":
				$mountain = new Mountain(2);
				$trail = new Trail(2);
				return view('Mountain', ['mountain' => $mountain, 'trail' => $trail]);
			break;

			default:
				return view('Mountains/all');
			break;
		}
	}
}