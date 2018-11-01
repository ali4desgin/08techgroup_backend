<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Package;

class PackageController extends Controller
{
    //
    public function index(Request $request){

       



        if($request->method() == "POST"){

            $request->validate([
                'ar_title' => 'required',
                'en_title' => 'required',
                'ar_note' => 'required',
                'en_note' => 'required',
                'price' => 'required',
            ]);



            $package = new Package;
            $package->ar_title = $request->input("ar_title");
            $package->en_title = $request->input("en_title");
            $package->price = $request->input("price");
            $package->ar_note = $request->input("ar_note");
            $package->en_note = $request->input("en_note");
            $package->save();

        }

        
        $packages = Package::orderBy("id","desc")->get()->toArray();
        return view("Dashboard.Package.index",compact("packages"));
    }


    public function view($package_id){

        
        $package = Package::where("id","=",$package_id)->first();
        if(empty($package)){
            return redirect("packages");
        }

        
        $package_customer = ["ali","osama","hussen"];

        return view("Dashboard.Package.view",compact("package"));
    }
}
