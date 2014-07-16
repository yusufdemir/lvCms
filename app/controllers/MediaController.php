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
	 * GET /media/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /media
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /media/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /media/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id)
	{
		return "edit - > ".$id;
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /media/{id}
	 *
	 * @param  int  $id
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

	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /media/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}