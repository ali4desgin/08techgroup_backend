<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Profit;
class ProfitsController extends Controller
{
    //
	public function daily_profits(){
		return view("BackEnd.Dashboard.Profit.daily");
	}
}
