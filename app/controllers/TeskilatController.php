<?php

class TeskilatController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /teskilat
	 *
	 * @return Response
	 */
	public function index()
	{
        $teskilat=Teskilat::where('role','=','10')->orderBy('id', 'DESC')->paginate(50);
        return View::make('admin.teskilat.teskilat-list',compact('teskilat'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /teskilat/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$citys = City::lists('il_ad', 'il_plaka');
		return View::make('admin.teskilat.teskilat-create',compact('citys'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /teskilat
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules=array(
			'firstname'=>'required',
			'firstname'=>'required'
			);
		$messages=array(
			'firstname.required'=>'Başlık Girilmemiş',
			'firstname.required'=>'Yayınlanma Tarihi Boş Girilmiş.'
			);
		$validator = Validator::make(Input::all(), $rules, $messages);
		if ($validator->fails()) {
			Session::flash('notification',array('head'=>'Bilgilendirme Mesajı!','text'=>'Form Hatalı Dolduruldu.','type'=>'error'));
			return Redirect::back()->withErrors($validator)->withInput();
		}else{
			$kullanici = new Teskilat;
			$kullanici->timestamps = false;
			$kullanici->firstname= Input::get('firstname');
			$kullanici->lastname= Input::get('lastname');
			$kullanici->email= Input::get('email');
			$kullanici->address= Input::get('address');
			$kullanici->city= Input::get('city');
			$kullanici->phone= Input::get('phone');
			$kullanici->role=10;
			$kullanici->save();
			Session::flash('notification',array('head'=>'Bilgilendirme Mesajı!','text'=>Input::get('head').' Teşkilat Üyesi Başarıyla Eklendi','type'=>'success','position'=>'lite'));
			return Redirect::back();
		}
	}

	/**
	 * Display the specified resource.
	 * GET /teskilat/{id}
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
	 * GET /teskilat/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $teskilat=Teskilat::find($id);
        $citys = City::lists('il_ad', 'il_plaka');
        return View::make('admin.teskilat.teskilat-edit',compact('teskilat','citys'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /teskilat/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules=array(
			'firstname'=>'required',
			'firstname'=>'required'
			);
		$messages=array(
			'firstname.required'=>'Başlık Girilmemiş',
			'firstname.required'=>'Yayınlanma Tarihi Boş Girilmiş.'
			);
		$validator = Validator::make(Input::all(), $rules, $messages);
		if ($validator->fails()) {
			Session::flash('notification',array('head'=>'Bilgilendirme Mesajı!','text'=>'Form Hatalı Dolduruldu.','type'=>'error'));
			return Redirect::back()->withErrors($validator)->withInput();
		}else{
			$kullanici = Teskilat::find($id);
			$kullanici->timestamps = false;
			$kullanici->firstname= Input::get('firstname');
			$kullanici->lastname= Input::get('lastname');
			$kullanici->email= Input::get('email');
			$kullanici->address= Input::get('address');
			$kullanici->city= Input::get('city');
			$kullanici->phone= Input::get('phone');
			$kullanici->role=10;
			$kullanici->save();
			Session::flash('notification',array('head'=>'Bilgilendirme Mesajı!','text'=>Input::get('head').' Teşkilat Üyesi Başarıyla Güncellendi','type'=>'success','position'=>'lite'));
			return Redirect::back();
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /teskilat/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Teskilat::destroy($id);
		Session::flash('notification',array('head'=>'Bilgilendirme Mesajı!','text'=>Input::get('head').' Teşkilat Üyesi Silindi','type'=>'error','position'=>'lite'));
		return Redirect::back();
	}

}