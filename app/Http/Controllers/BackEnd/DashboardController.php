<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Notifications;

class DashboardController extends Controller
{
    //

    public function index(){
        return view("BackEnd.Dashboard.index");
    }
	
	public function payments_gateways(Request $request){
		
		
		
		
		if($request->method()=="POST"){

			$data = $request->input();
			$master = false;
			$paypal = false;
			$blockchain = false;
			$mbok = false;
			
			
			if(isset($data['Master'])){
				$master = true;
			}
			if(isset($data['PayPal'])){
				$paypal = true;
			}
			if(isset($data['BlockChain'])){
				$blockchain = true;
			}
			if(isset($data['Mbok'])){
				$mbok = true;
			}
			
			
			
			
			$edit_gateway["Mbok"] = $mbok;
			$edit_gateway["PayPal"] = $paypal;
			$edit_gateway["BlockChain"] = $blockchain;
			$edit_gateway["Master"] = $master;
			
			
			$newJsonString = json_encode($edit_gateway);
		
			file_put_contents("json/payments_mthods.json",$newJsonString);
			
			
			
			
			
			
		}
		
		
		
		
		$payment_methods_string = file_get_contents("json/payments_mthods.json");
		$gateway = json_decode($payment_methods_string,true);
		return view("BackEnd.Dashboard.Paymentsgateways.index",compact("gateway"));
	}
	
	
	public function gateway($payment_id,Request $request){
		
		// post request in page
	
		
		
		
		// load data
		switch($payment_id){
			
			case 1:
				 $url = file_get_contents("json/gateways/paypal.json");
			break;
			
			
			default:
			return back();
			
		}
		
		
		
		
		
		
		
		$data = json_decode($url,true);
		$gateway = $data["production"];
		
		
		
		
		return view("BackEnd.Dashboard.Paymentsgateways.payment",compact("data","payment_id","gateway"));
	}
	
	
	
	public function notifiactions(){
		
		
		$nofitications = Notifications::orderBy('id',"desc")->paginate(50);
		
		
		return view("BackEnd.Dashboard.Notifications.index",compact("nofitications"));
	}
	
	
	public function read_notify($notification_id,Request $request){
		
		Notifications::where("id",$notification_id)->update([
			"viewed" => 1
			
		]);
		
		return back();
	}
}
