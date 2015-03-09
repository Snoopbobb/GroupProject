<?php
namespace App\Models;

use DB;
use App\Library\Sql;
use App\Models\Model;

class Image extends Model {
	protected static $table = 'user';
	protected static $key = 'user_id';
}