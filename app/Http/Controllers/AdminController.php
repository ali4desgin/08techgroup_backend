<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Admin;
use Session;
class AdminController extends Controller
{

    public function index(Request $request){
        $custom_errors = [];
        if($request->method() == "POST"){

            
            $request->validate([
                'email' => 'required|max:255|regex:/^.+@.+$/i',
                'password' => 'required',
            ]);


            $email = $request->input("email");
            $password = $request->input("password");

            

            $admin = Admin::where("email","=",$email)->first();
            if(!empty($admin)){

                $cpassword = $admin->password;
                if(password_verify($password,$cpassword)){
                    Session::put('adminSession', 'logged');
                   return  redirect("/dashboard");
                }else{
                    $custom_errors[] = "البيانات المدخلة غير صحيحة"; 
                }
            }else{
               
                $custom_errors[] = "البيانات المدخلة غير صحيحة";
                
            }
        }


        return view("login",compact("custom_errors"));
    }
}
