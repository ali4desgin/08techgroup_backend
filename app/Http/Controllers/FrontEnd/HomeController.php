<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\UserRegisteration;
use \App\Package,\App\Customer;
use Illuminate\Support\Facades\Mail;
class HomeController extends Controller
{
    //
	
	public function index(){
		
		// $header = file_get_contents("json/header.json");
// 		$header_json = json_decode($header,true);
//
		
		$packages = Package::get()->toArray();
		
		
		
		return view("FrontEnd.Home.index",compact("packages"));
	}
	
	
	public function register(Request $request)
	{
		
		$errors = [];
		
		//$customer = Customer::find(1);
		//return Mail::to("ali4desgin@gmail.com")->send(new UserRegisteration($customer));
		if($request->method() == 'POST'){
			
            $request->validate([
                'first_name' => 'required|min:3',
                'middel_name' => 'required|min:3',
				'last_name' => 'required|min:3',
				'country' => 'required',
				'gender' => 'required',
				'password' => 'required|min:8|max:200',
				'confirm_password' => 'required|min:8|max:200',
				'phone_number' => 'required|min:8|max:15',
				'package' => 'required'	
            ]);
			
			
				if(!filter_var($request->input("email"), FILTER_VALIDATE_EMAIL)){
					$email_error= 'this email ar not valid';
					return view("FrontEnd.Home.register",compact("email_error"));
				}
				
				
				$cu = Customer::where("email",$request->input("email"))->count();
				if($cu>=1){
					$email_error= 'this email is already used';
					return view("FrontEnd.Home.register",compact("email_error"));
				}
				
				
				
				if($request->input("password")!= $request->input("confirm_password"))
				{
					$password_error = 'password doesn\' match confirm password';
					return view("FrontEnd.Home.register",compact("password_error"));
				}
			
			
				if($request->input("password")== $request->input("confirm_password")){
					
				}else{
					$errors['passowrd_macth'] = 'password doesn\' match confirm password';
					return view("FrontEnd.Home.register",compact("errors"));
				}
			
			
			
				$password = password_hash($request->input("password"),PASSWORD_DEFAULT);
				
								//
				$customer_object = new Customer;
				$customer_object->package_id = $request->input("package");
				$customer_object->first_name = $request->input("first_name");
				$customer_object->middel_name = $request->input("middel_name");
				$customer_object->last_name = $request->input("last_name");
				$customer_object->email = $request->input("email");
				$customer_object->password = $password;
				$customer_object->phone = $request->input("phone_number");
				$customer_object->country = $request->input("country");
				$customer_object->gender = $request->input("gender");
				$customer_object->status = 3;
				$customer_object->save();
				// auth hre
				
				
				
				return redirect("/checkout");
			//return $request->input();
		}
		
		$packages = Package::all();
		return view("FrontEnd.Home.register",compact("packages"));
	}
}
