<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    //
	
	protected $table = "notifications";
	
	
	
	public static function  nofitications_count()
	{
		
		$count = Notifications::where("viewed",0)->count();
		return $count;
	}
}
