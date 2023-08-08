<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "app/Http/_AdController.php" was generated by ProBot AI.
* Date: 8/7/2023 5:52:22 AM
* Contact: towhid1@outlook.com
*/
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\Ad;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
class AdController extends Controller{
	public function index(){
		return response()->json(["ads"=>Ad::All()]);
	}	
	public function store(Request $request){
		//Ad::create($request->all());
		$ad = new Ad;
		$ad->ad_title=$request->ad_title;
		$ad->ad_description=$request->ad_description;
		$ad->ad_type=$request->ad_type;
		$ad->ad_url=$request->ad_url;

		$ad->save();

		return json_encode(['success'=>'Created Successfully.']);
	}
	public function show($id){
		$ad = Ad::find($id);
		return json_encode($ad);
	}
	
	public function update(Request $request,Ad $ad){
		//Ad::update($request->all());
		$ad = Ad::find($ad->id);
		$ad->ad_title=$request->ad_title;
		$ad->ad_description=$request->ad_description;
		$ad->ad_type=$request->ad_type;
		$ad->ad_url=$request->ad_url;

		$ad->save();

		return json_encode(['success'=>'Updated Successfully.']);
	}
	public function destroy($id){

		Ad::find($id)->delete();
		return json_encode(["success"=>$id]);
	}
}
?>