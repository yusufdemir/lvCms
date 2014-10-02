<?php

class NewsslatterController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /newsslatter
	 *
	 * @return Response
	 */
	public function postIndex()
	{
		$rules=array(
			'newslatter'=>'required|email|unique:teskilat,email'
			);
		$messages=array(
			'newslatter.required'=>'E-posta adresiniz girilmemiş.',
			'newslatter.email'=>'E-posta adresiniz hatalı girilmiş.',
			'newslatter.unique'=>'E-posta adresiniz kayıtlıdır.'
			);
		$validator = Validator::make(Input::all(), $rules, $messages);
		if ($validator->fails()) {
			//Session::flash('newsslatter','E-posta adresinizi inceleyip tekrar deneyiniz.');
			return Redirect::back()->withErrors($validator)->withInput();
		}else{
			$kullanici = new Teskilat;
			$kullanici->timestamps = false;
			$kullanici->firstname="E-posta Gündem Üyesi" ;
			$kullanici->email= Input::get('newslatter');
			$kullanici->role=99;//newslatter role
			$kullanici->save();
			Session::flash('newsslatter','E-posta gündemine kaydoldunuz.');
			return Redirect::back();
		}
	}


	/**
	 * Store a newly created resource in storage.
	 * POST /newsslatter
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /newsslatter/{id}
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
	 * GET /newsslatter/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /newsslatter/{id}
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
	 * DELETE /newsslatter/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}