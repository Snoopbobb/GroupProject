<?php namespace App\Http\Controllers;
use Illuminate\Contracts\Auth\Guard;
use DB;
use App\Models\Mountain;
use App\Models\Trail;
use App\Models\Image;

class ProfileController extends Controller {

	
	public function show() {
		$user = \Auth::user();

		return view('profile', ['user'=>$user]);
	}

}
