<?php namespace App\Http\Controllers;
use Illuminate\Contracts\Auth\Guard;
use DB;
use Request;
use App\Models\Profile;
use App\Models\Mountain;
use App\Models\Trail;
use App\Models\Image;

class ProfileController extends Controller {

//Access current user info	
	public function show() {
		$user = \Auth::user();

		return view('profile', ['user'=>$user]);
	}


//Update User Info

	public function update($user_id) {
		$sql= "UPDATE user
				SET first_name = :first_name,
					last_name = :last_name,
					email = :email,
					gender = :gender
				WHERE 
					user_id = :user_id
				";

		$user_id = Request::input('user_id');
		$first_name = Request::input('first_name');
		$last_name = Request::input('last_name');
		$email = Request::input('email');
		$gender = Request::input('gender');


		DB::statement($sql, [':first_name'=>$first_name,
								':last_name'=>$last_name,
								':email'=>$email,
								':gender'=>$gender,
								':user_id'=>$user_id]);

		return redirect("profile");
	}

//Delete User

	public function delete($user_id) {
		$sql="DELETE FROM user WHERE user_id = $user_id";
		DB::delete($sql);
		return redirect("/");


	}
}
