<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\PaymentsHistory;

class PaymentsController extends Controller
{
    //
	
	public function index(){
		$payments = PaymentsHistory::paginate(50);
		
		
		return view("BackEnd.Dashboard.Payments.index",compact("payments"));
	}
	
}
