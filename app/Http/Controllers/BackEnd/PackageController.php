<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Package, \App\Profit,\App\DateHelper,\App\PackageFeatures;
class PackageController extends Controller
{
    //
    public function index(Request $request){

       
		$today = DateHelper::returnToday();


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

        
        $dpackages = Package::orderBy("id","desc")->get()->toArray();
		$packages = [];
		
		foreach($dpackages as $package){
			$profit = Profit::where("package_id", $package['id'])->where("daily_date",$today)->first();
				if(empty($profit)){
					$package['has_today_profit'] = false; 
				}else{
					$package['has_today_profit'] = true; 
					$package['today_profit'] = $profit;
				}
				$packages[] = $package;
		}
        return view("BackEnd.Dashboard.Package.index",compact("packages","today"));
    }


    public function view($package_id){

        
        $package = Package::where("id","=",$package_id)->first();
        if(empty($package)){
            return redirect("packages");
        }

        
        $package_customer = ["ali","osama","hussen"];

        return view("BackEnd.Dashboard.Package.view",compact("package"));
    }
	
	
	public function delete($package_id){
		 Package::where("id","=",$package_id)->delete();
		return back();
		
	}
	
	
	// ajax call
	public function package_json_details($package_id){
		$package = Package::where("id",$package_id)->first(); 
		if(empty($package)){
			return json_encode(array("response"=>false,"message"=>"الرجاء اعادة اختيار الباقة ، الباقة غير صالحة"));
		}
		return json_encode(array("response"=>true,"message"=>"تم بنجاح","result" => $package));   
	}
	
	
	public function add_daily_profit(Request $request){
		
        $request->validate([
            'value' => 'required',
            'mode' => 'required',
            'package_id' => 'required',
			'day' => 'required'
        ]);
		
		$prof = new Profit;
		$prof->package_id = $request->input("package_id");
		$prof->type = $request->input("mode");
		$prof->daily_date = $request->input("day");
		$prof->profit = $request->input("value");
		$prof->save();
		return back();
	}
	
	
	public function features($package_id,Request $request){
		$isAdded = false;
        $package = Package::where("id","=",$package_id)->first();
        if(empty($package)){
            return back();
        
		}
		
		if($request->method()== "POST"){
	        $request->validate([
	            'ar' => 'required',
	            'en' => 'required'
	        ]);
				
				$feat = new PackageFeatures;
				$feat->package_id = $package_id;
				$feat->ar_feature = $request->input("ar");
				$feat->en_feature = $request->input("en");
				$feat->save();
				$isAdded = true;
		}
		
		
		$features = PackageFeatures::where('package_id',$package_id)->get()->toArray();
		
		
		
		
		
		
		return view("BackEnd.Dashboard.Package.features",compact("package","features","isAdded"));
		
	}
	
	public function remove_feature($feature_id){
	 		PackageFeatures::where("id","=",$feature_id)->delete();
			return back();
		//return $feature_id;
	}
	
	
	public function edit($package_id,Request $request){
		$isEdited = false;
        $package = Package::where("id","=",$package_id)->first();
        if(empty($package)){
            return back();
        
		}
		
        if($request->method() == "POST"){

            $request->validate([
                'ar_title' => 'required',
                'en_title' => 'required',
                'ar_note' => 'required',
                'en_note' => 'required',
                'price' => 'required',
            ]);



            $package =  Package::where("id",$package_id)->update([
            	"ar_title" => 	$request->input("ar_title"),
				"en_title" => 	$request->input("en_title"),
				"price" => 	$request->input("price"),
				"ar_note" => 	$request->input("ar_note"),
				"en_note" => 	$request->input("en_note"),
            ]);
            $isEdited = true;
 		   $package = Package::where("id","=",$package_id)->first();
        }
		
		return view("BackEnd.Dashboard.Package.edit",compact("package","isEdited"));
	}
}
