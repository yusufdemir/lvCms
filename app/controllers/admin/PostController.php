<?php

class PostController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /post
	 *
	 * @return Response
	 */
	public function index()
	{
		$all_post=Post::all();
		return View::make('admin.post.post-list', compact('all_post'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /post/create
	 *
	 * @return Response
	 */
	public function create()
	{
		
		$cat=Cat::all();
		return View::make('admin.post.post-form',compact('cat'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /post
	 *
	 * @return Response
	 */
	public function store()
	{
		/*SERVER MİME TYPE ERROR WAMP*/
		/*
		Rules=>	'media' => 'mimes:jpeg,bmp,png'
		Messages => 'media.mimes'=>'Yüklediğiniz Resim jpeg,bmp veya png Formatlarında olmalıdır.'
		*/
		$rules=array(
			'head'=>'required',
			'publish_date'=>'required|date_format:Y-m-d'
			);
		$messages=array(
			'head.required'=>'Başlık Girilmemiş',
			'publish_date.required'=>'Yayınlanma Tarihi Boş Girilmiş.',
			'publish_date.date_format'=>'Yayınlanma tarihi hatalı bir formatta girilmiş.'
			);
		$validator = Validator::make(Input::all(), $rules, $messages);
		if ($validator->fails()) {
			Session::flash('notification',array('head'=>'Bilgilendirme Mesajı!','text'=>'Form Hatalı Dolduruldu.','type'=>'error'));
			return Redirect::route('post-create')->withErrors($validator)->withInput();
		}else{
			//add to db
			$post = new Post;
			$post->head= Input::get('head');
			$post->slug= Str::slug(Input::get('head'));
			$post->content= Input::get('content');
			$post->user_id=Auth::id();
			$post->cat_id=Input::get('cat');
			$post->active=Input::get('active');
			$post->publish_date=Input::get('publish_date');
			$post->slider=Input::get('slider');

			if (Input::hasFile('media')) {
				$file            = Input::file('media');
				$desinationFolder= '/_uploads/';
		        $destinationPath = public_path().$desinationFolder;
		        $filename        = date('dd/mm/yyy').'_'.str_random(6) . '_' . $file->getClientOriginalName();
		        $filelink		 = $desinationFolder.$filename;
		        $uploadSuccess   = $file->move($destinationPath, $filename);
		        $post->media=$filelink;
			}

			$post->save();
			Session::flash('notification',array('head'=>'Bilgilendirme Mesajı!','text'=>Input::get('head').' Başlıklı Yazınız Başarıyla Eklendi','type'=>'success'));
			return Redirect::route('post-list');
		}

		//return var_dump(Input::all());
	}

	/**
	 * Display the specified resource.
	 * GET /post/{id}
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
	 * GET /post/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return "Edit Page";
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /post/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /post/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}