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
		$albums=Albuminfo::where('deleted','=','0')->get();
		return View::make('admin.media.media-list', compact('albums') );
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
		    'file' => 'max:3000'
		);
		$messages=array(
			'album_id.required'=>'test'
			);
		$validation = Validator::make(Input::all(), $rules, $messages);
		if($validation->fails()){
			return Response::json('status', 400);
		}
			if (Input::hasFile('file')) {
				$file            = Input::file('file');
				$desinationFolder= '/_uploads/media/';
		        $destinationPath = public_path().$desinationFolder;
		        $filename        = date('YmdHis').'_'. $file->getClientOriginalName();
		        $filelink		 = $desinationFolder.$filename;
		        $uploadSuccess   = $file->move($destinationPath, $filename);
			}
		
		if ($uploadSuccess) {
			//return Response::json('success', 200);
			$addphotos=new Photo;
			$addphotos->link=$filelink;
			$addphotos->name=$filename;
			$addphotos->user_id=Auth::id();
			$addphotos->save();
			$photoid=$addphotos->id;

			$add= new Album;
			$add->albuminfo_id=Input::get('album_id');
			$add->photo_id=$photoid;
			$add->save();

			return Response::json('status', 200);
        } else {
            return Response::json('status', 400);
        }
		

	}

	/**
	 * Show the form for creating a new resource.
	 * GET /media/delete
	 *photoinfo
	 * @return Response
	 */
	public function getPhotoinfo(){
		if (Input::get('id')!=null) {
			$photo=Album::find(Input::get('id'))->photo;
			$response['status']=true;
			$response['title']=$photo->name;
			$response['description']=$photo->alt;
			$response['id']=$photo->id;
		}else{
			$response['status']=false;
		}

		return json_encode($response);
		
	}


	public function postAddalbum(){

			$album=new Albuminfo;
			$album->name=Input::get('name');
			$album->description=Input::get('description');
			$save=$album->save();
			$response['status'] = ($save) ? "true" : "false" ;

		return json_encode($response);
		
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /media/delete
	 *photoinfo
	 * @return Response
	 */
	public function postSavephotoinfo(){
		if (Input::get('id')!=null) {
			$photo=Photo::find(Input::get('id'));
			$photo->name=Input::get('title');
			$photo->alt=Input::get('description');
			$photo->save();
			$response['status']=true;
		}else{
			$response['status']=false;
		}

		return json_encode($response);
		
	}



	/**
	 * Show the form for creating a new resource.
	 * GET /media/delete
	 *photoinfo
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

	/**
	 * Show the form for creating a new resource.
	 * GET /media/delete
	 *photoinfo
	 * @return Response
	 */
	public function deleteDeletealbum(){
		if (Input::get('_method')=="DELETE" && Input::get('id')!=null) {
			$delete=Albuminfo::find(Input::get('id'));
			$delete->deleted=1;
			$delete->save();
			Session::flash('notification',array('head'=>'Bilgilendirme Mesajı!','text'=>'Albüm başarıyla silindi.','type'=>'success'));
			return Redirect::to('/admin/media/');
		}else{
			Session::flash('notification',array('head'=>'Bilgilendirme Mesajı!','text'=>'Albüm Silinemedi.','type'=>'error'));
			return Redirect::to('/admin/media/');
		}

		
	}

}

