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
		$page['name']='Yazı';
		$all_post=Post::where('deleted','=','0')->where('type','=','post')->get();
		return View::make('admin.post.post-list', compact('all_post','page'));
	}


	public function pageindex()
	{	
		$page['name']='Sayfa';
		$all_post=Post::where('deleted','=','0')->where('type','=','page')->get();
		return View::make('admin.post.post-list', compact('all_post','page'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /post/create
	 *
	 * @return Response
	 */
	public function create($type=null)
	{
		$t['action']=($type==null?"post":$type);
		if($t['action']=="post"){
			$t['name']="Yazı";
			}elseif ($t['action']=="page") {
				$t['name']="Sayfa";
				}else{
					$t['action']="post";
					$t['name']="Yazı";
					}
		$cat=Cat::all();
		return View::make('admin.post.post-form',compact('cat','t'));
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
			'publish_date'=>'required|date_format:Y-m-d',
			'type'=>'required|in:post,page'
			);
		$messages=array(
			'head.required'=>'Başlık Girilmemiş',
			'publish_date.required'=>'Yayınlanma Tarihi Boş Girilmiş.',
			'publish_date.date_format'=>'Yayınlanma tarihi hatalı bir formatta girilmiş.',
			'type.in'=>'Form Kodlarında Değişim Tespit Edildi. Tekrar Deneyiniz.'
			);
		$validator = Validator::make(Input::all(), $rules, $messages);
		if ($validator->fails()) {
			Session::flash('notification',array('head'=>'Bilgilendirme Mesajı!','text'=>'Form Hatalı Dolduruldu.','type'=>'error'));
			return Redirect::route('post-create')->withErrors($validator)->withInput();
		}else{
			//add to db
			$post = new Post;
			$post->type=Input::get('type');
			$post->head= Input::get('head');
			$post->slug= Str::slug(Input::get('head'));
			$post->content= Input::get('content');
			$post->user_id=Auth::id();
			$post->cat_id=(Input::get('cat_id')==null?2:Input::get('cat_id'));
			$post->active=Input::get('active');
			$post->publish_date=Input::get('publish_date');
			$post->slider=(Input::get('slider')==true?1:0);
			$post->tags=Input::get('tags');


			if (Input::hasFile('media')) {
				$file            = Input::file('media');
				$desinationFolder= '/_uploads/';
		        $destinationPath = public_path().$desinationFolder;
		        $filename        = date('Ymd').'_'.str_random(6) . '_' . Str::slug($file->getClientOriginalName(), '_');
		        $filelink		 = $desinationFolder.$filename;
		        $uploadSuccess   = $file->move($destinationPath, $filename);
		        $post->media=$filelink;
			}

			$post->save();
			Session::flash('notification',array('head'=>'Bilgilendirme Mesajı!','text'=>Input::get('head').' Başlıklı Yazınız Başarıyla Eklendi','type'=>'success','position'=>'full'));
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
		$post = Post::find($id);
		return View::make('admin.post.post-detail',compact('post'));
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
		$post = Post::find($id);
		$cat=Cat::all();
		// show the edit form and pass the nerd
		return View::make('admin.post.post-edit',compact('cat'))->with('post',$post);
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
			$post = Post::find($id);
			$post->head= Input::get('head');
			$post->slug= Str::slug(Input::get('head'));
			$post->content= Input::get('content');
			$post->cat_id=Input::get('cat_id');
			$post->active=Input::get('active');
			$post->publish_date=Input::get('publish_date');
			$post->slider=(Input::get('slider')==true?1:0);

			if(Input::get('del-pic')==true){
				$post->media="";
			}else{
				if (Input::hasFile('media')) {
					$file            = Input::file('media');
					$desinationFolder= '/_uploads/';
			        $destinationPath = public_path().$desinationFolder;
			        $filename        = date('Ymd').'_'.str_random(6) . '_' . Str::slug($file->getClientOriginalName(), '_');
			        $filelink		 = $desinationFolder.$filename;
			        $uploadSuccess   = $file->move($destinationPath, $filename);
			        $post->media=$filelink;
				}
			}


			$post->save();
			Session::flash('notification',array('head'=>'Bilgilendirme Mesajı!','text'=>Input::get('head').' Başlıklı Yazınız Başarıyla Güncellendi...','type'=>'info'));
			return Redirect::route('post-list');

		}
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
		$post = Post::find($id);
		$post->deleted=1;
		$post->save();
		Session::flash('notification',array('head'=>'Bilgilendirme Mesajı!','text'=>'Gönderi Başarıyla Çöp Kutusuna Gönderildi.','type'=>'info'));
		return Redirect::route('post-list');
	}

}