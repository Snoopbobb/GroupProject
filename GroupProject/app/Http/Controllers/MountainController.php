<?php namespace App\Http\Controllers;
use DB;
use App\Models\Mountain;

class MountainController extends Controller {

	public function getAll() {
		return view('Mountain', ['title' => 'All The Mountains', 'description' => 'some random Mountains yo']);
	}

	public function getMountain($mountain_id) {


		switch ($mountain_id) {

			case "1":
				$mountain = new Mountain(1);
				return view('Mountain', ['mountain' => $mountain]);
			break;
			case "2":
				$mountain = new Mountain(2);
				$trail = new Trail(2);
				return view('Mountain', ['mountain' => $mountain, 'trail' => $trail]);
			break;
			case "3":
				$mountain = new Mountain(3);
				return view('Mountain', ['mountain' => $mountain]);
			break;
			case "4":
				$mountain = new Mountain(4);
				return view('Mountain', ['mountain' => $mountain]);
			break;			
			case "5":
				$mountain = new Mountain(5);
				return view('Mountain', ['mountain' => $mountain]);
			break;			
			case "6":
				$mountain = new Mountain(6);
				return view('Mountain', ['mountain' => $mountain]);
			break;			
			case "7":
				$mountain = new Mountain(7);
				return view('Mountain', ['mountain' => $mountain]);
			break;
			case "8":
				$mountain = new Mountain(8);
				return view('Mountain', ['mountain' => $mountain]);
			break;
			case "9":
				$mountain = new Mountain(9);
				return view('Mountain', ['mountain' => $mountain]);
			break;

			default:
				return view('Mountains/all');
			break;
		}
	}
}