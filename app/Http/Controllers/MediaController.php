<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "app/Http/_MediaController.php" was generated by ProBot AI.
* Date: 8/7/2023 10:24:20 PM
* Contact: towhid1@outlook.com
*/
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
class MediaController extends Controller{
	public function index(){
		$medias = Media::paginate(10);
		return view("pages.erp.media.index",["medias"=>$medias]);
	}
	public function create(){
		return view("pages.erp.media.create",["posts"=>Post::all()]);
	}
	public function store(Request $request){
		//Media::create($request->all());
		$media = new Media;
		$media->post_id=$request->post_id;
		$media->media_url=$request->media_url;
		$media->media_type=$request->media_type;

		$media->save();

		return back()->with('success', 'Created Successfully.');
	}
	public function show($id){
		$media = Media::find($id);
		return view("pages.erp.media.show",["media"=>$media]);
	}
	public function edit(Media $media){
		return view("pages.erp.media.edit",["media"=>$media,"posts"=>Post::all()]);
	}
	public function update(Request $request,Media $media){
		//Media::update($request->all());
		$media = Media::find($media->id);
		$media->post_id=$request->post_id;
		$media->media_url=$request->media_url;
		$media->media_type=$request->media_type;

		$media->save();

		return redirect()->route("medias.index")->with('success','Updated Successfully.');
	}
	public function destroy(Media $media){
		$media->delete();
		return redirect()->route("medias.index")->with('success', 'Deleted Successfully.');
	}
}
?>