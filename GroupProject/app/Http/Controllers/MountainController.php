<?php namespace App\Http\Controllers;
use DB;
use App\Models\Mountain;
use App\Models\Trail;

class MountainController extends Controller {

	public function getAll() {
		return view('Mountain', ['title' => 'All The Mountains', 'description' => 'some random Mountains yo']);
	}

	public function getMountain($mountain_id) {
			$trailName = '';
			$trailId = '';
			$mountain = new Mountain($mountain_id);
			$trails = Trail::all(['mountain_id' => $mountain_id]);

			print_r($trails->getArray());
			foreach($trails->getArray() as $trail) {
				$trailName .= $trail->name;
				$trailId .= $trail->trail_id;
			}

			echo $trailName;
			echo $trailId;

			return view('Mountain', ['mountain' => $mountain, 'trail' => $trails, 'trailName' => $trailName, 'trailId' => $trailId]);
	}
}