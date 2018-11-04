<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Customer;
class CustomerController extends Controller
{
    //
	
	
	public function index(){
		$stats = [];
		$empty_error_text = "لا يوجد مستخدمين بالموقع حاليا";
		$search_text = "";
		$customers = Customer::paginate(30);
	
		if(isset($_GET['search_keyword'])){
			$key = $_GET['search_keyword'];
			$empty_error_text = "لا توجد نتائج مطابقة لعملية البحث ";
			$search_text = $key;
			$customers = Customer::where('first_name', 'like', '%' .  $key .'%')->orWhere('middel_name', 'like', '%' .  $key .'%')->orWhere('first_name', 'like', '%' .  $key .'%')->orWhere('last_name', 'like', '%' .  $key .'%')->orWhere('email', 'like', '%' .  $key .'%')->orWhere('phone', 'like', '%' .  $key .'%')->paginate(30);
		}
		
		$stats['cus_count'] = Customer::get()->count();
		return view("BackEnd.Dashboard.Customers.index",compact("customers","stats","search_text","empty_error_text"));
	}
	
	
	public function edit($customer_id,Request $request){
		$pop = [
			"editcomplete" => false
			
		];
		if(!is_numeric($customer_id)){
			return redirect("/adminpanel/customers");
		}
		
		$customer = Customer::where("id","=",$customer_id)->first();
		
		
		
		if($request->method()=="POST"){
            $request->validate([
                'first_name' => 'required|min:3',
                'middel_name' => 'required|min:3',
				'last_name' => 'required|min:3',
				'country' => 'required|min:3',
				'gender' => 'required',
				'phone' => 'required|min:8|max:15'
            ]);
				
				
				$ucustomer = Customer::where("id","=",$customer_id)->update([
					"first_name"=> $request->input("first_name"),
					"middel_name"=> $request->input("middel_name"),
					"last_name"=> $request->input("last_name"),
					"gender"=> $request->input("gender"),
					"country"=> $request->input("country")
				]);
					
				$pop['editcomplete'] = true;
				
				$customer = Customer::where("id","=",$customer_id)->first();
		}
		
		return view("BackEnd.Dashboard.Customers.edit",compact("customer","pop"));
	}



	public function view($customer_id,Request $request){
		if(!is_numeric($customer_id)){
			return redirect("/adminpanel/customers");
		}
		
		$customer = Customer::where("id","=",$customer_id)->first();
		
	
		return view("BackEnd.Dashboard.Customers.view",compact("customer"));
	}
	
	public function delete($customer_id){
		$customer = Customer::where("id","=",$customer_id)->delete();
		return back();
		
	}
	
}
