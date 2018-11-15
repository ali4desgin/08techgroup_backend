<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentsController extends Controller
{
    //
	
	public function index(){
		return view("FrontEnd.Payments.Checkout.index");
	}
}
