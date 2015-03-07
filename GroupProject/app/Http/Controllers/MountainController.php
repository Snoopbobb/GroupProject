<?php namespace App\Http\Controllers;
use DB;
use App\Models\Mountain;
use App\Models\Trail;
use App\Models\Image;

class MountainController extends Controller {

	public function getAll() {
		return view('Mountain', ['title' => 'All The Mountains', 'description' => 'some random Mountains yo']);
	}

	public function getMountain($mountain_id) {
			$trailNames = [];
			$trailIds = [];


			$mountain = new Mountain($mountain_id);
			$image = $mountain->image_id;
			$trails = Trail::all(['mountain_id' => $mountain_id]);

			$img = new Image($image);
			$imageURL = $img->image_path;

			foreach($trails->getArray() as $trail) {
				$trailNames[] = $trail->name;
				$trailIds[] = $trail->trail_id;
			}

			$template = '';
			$a = '<a href="/Trails/'. $mountain_id . '/';
			$b = '"><div class="trail_tile_';
			$i = 1;
			foreach ($trails->getArray() as $trail) {
				$template .= $a . $trail->trail_id . $b . $i . '">' . $trail->name . '</div></a>';
				$i++;
			}

			return view('Mountain', ['mountain' => $mountain, 'trail' => $trails, 
						'trailNames' => $trailNames, 'trailIds' => $trailIds, 'imageURL' => $imageURL, 'template' => $template]);
	}
}