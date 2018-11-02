<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Profit;
class ProfitsController extends Controller
{
    //
	public function daily_profits(){
		return view("Dashboard.Profit.daily");
	}
}
