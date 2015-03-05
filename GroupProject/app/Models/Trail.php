<?php
namespace App\Models;

use DB;
use App\Library\Sql;
use App\Models\Model;

class Trail extends Model {
	protected static $table = 'trail';
	protected static $key = 'mountain_id';
}