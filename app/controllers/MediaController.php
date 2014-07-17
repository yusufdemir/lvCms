<?php

class MediaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /media
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$images=Album::find(1)->get();
		return View::make('admin.media.media-single-album', compact('images') );
	}

	public function getShowalbum($first){
		$images=Album::where('albuminfo_id','=',$first)->where('deleted','=',0)->get();
		$album=Albuminfo::find($first);
		return View::make('admin.media.media-single-album', compact('images','album') );
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /media/store
	 *
	 * @return Response
	 */
	public function postStorephoto()
	{
		$rules = array(
			'album_id'=>'required',
		    'file' => 'max:3005'
		);
		$messages=array(
			'album_id.required'=>'test'
			);
		$validation = Validator::make(Input::all(), $rules, $messages);
		if($validation->fails()){
			return "error";
		}
			if (Input::hasFile('file')) {
				$file            = Input::file('file');
				$desinationFolder= '/_uploads/media/';
		        $destinationPath = public_path().$desinationFolder;
		        $filename        = date('YmdHis').'_'. $file->getClientOriginalName();
		        $filelink		 = $desinationFolder.$filename;
		        $uploadSuccess   = $file->move($destinationPath, $filename);
			}
		


		

	}

	/**
	 * Show the form for creating a new resource.
	 * GET /media/delete
	 *
	 * @return Response
	 */
	public function getDelphoto(){
		if (Input::get('_method')=="PUT" && Input::get('id')!=null) {
			$delete=Album::find(Input::get('id'));
			$delete->deleted=1;
			$delete->save();
			$response['status']=true;
		}else{
			$response['status']=false;
		}

		return json_encode($response);
		
	}

}