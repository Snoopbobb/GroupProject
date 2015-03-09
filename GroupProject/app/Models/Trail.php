<?php
namespace App\Models;

use DB;
use App\Library\Sql;
use App\Models\Model;

class Trail extends Model {
	protected static $table = 'trail';
	protected static $key = 'trail_id';

	public static function getComments($trail_id){	
		$sql = "
			SELECT *
			FROM comment 
			JOIN user USING(user_id)
			WHERE trail_id = :trail_id
			";
		$comment = DB::select($sql, [':trail_id' => $trail_id]);

		return $comment;
	}
}