<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "app/Http/_MediaController.php" was generated by ProBot AI.
* Date: 8/7/2023 5:54:23 AM
* Contact: towhid1@outlook.com
*/
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
class MediaController extends Controller{
	public function index(){
		return json_encode(["medias"=>Media::All()]);
	}
	public function store(Request $request){
		//Media::create($request->all());
		$media = new Media;
		$media->post_id=$request->post_id;
		$media->media_url=$request->media_url;
		$media->media_type=$request->media_type;

		$media->save();

		return json_encode(['success'=>'Created Successfully.']);
	}
	public function show($id){
		$media = Media::find($id);
		return json_encode($media);
	}
	public function update(Request $request,Media $media){
		//Media::update($request->all());
		$media = Media::find($media->id);
		$media->post_id=$request->post_id;
		$media->media_url=$request->media_url;
		$media->media_type=$request->media_type;

		$media->save();

		return json_encode(['success'=>'Updated Successfully.']);
	}
	public function destroy($id){

		Media::find($id)->delete();
		return json_encode(["success"=>$id]);
	}
}
?>
