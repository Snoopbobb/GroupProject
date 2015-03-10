<?php
namespace App\Models;

use DB;
use App\Library\SQL;
use App\Models\Model;

class Trail extends Model{
	protected static $table = 'trail';
	protected static $key = 'trail_id';

	public static function getComments($trail_id){	
		$sql = "
			SELECT user.user_id, 
			comment_description,  
			comment.created_at as created_at,
			user.username
			FROM comment 
			JOIN user USING(user_id)
			WHERE trail_id = :trail_id
			ORDER BY comment.created_at DESC
			";
		$comment = DB::select($sql, [':trail_id' => $trail_id]);

		return $comment;
	}

	public static function addComment($user_id, $trail_id, $comment) {
		$sql = "
			INSERT INTO comment
			(user_id, comment_description, trail_id)
			VALUES(:user_id, :comment, :trail_id)
			";
		$new_comment = DB::insert($sql, [
					':user_id' => $user_id, 
					':comment' => $comment,
					':trail_id' => $trail_id
							]);


		return $new_comment;
	}
}