<?php 
namespace App\Models;

use DB;
use App\Library\Sql;
use App\Models\Model;

class Mountain extends Model {
	protected static $table = 'Mountain';
	protected static $key = 'mountain_id';
}