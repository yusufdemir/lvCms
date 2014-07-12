<?php

class EventController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /event
	 *
	 * @return Response
	 */
	public function index()
	{
		$actives=Active::where('deleted','=','0')->get();
		return View::make('admin.event.event-list',compact('actives'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /event/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.event.event-create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /event
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules=array(
			'name'=>'required',
			'link'=>'required',
			'event_start'=>'required|date_format:Y-m-d',
			'event_end'=>'date_format:Y-m-d'
			);

		$messages=array(
			'name.required'=>'Etkinlik Adı Boş Geçilemez!',
			'link.required'=>'Etkinlik Linki boş geçilemez.',
			'event_start.required'=>'Etkinlik Tarihi Boş Geçilemez.',
			'event_start.date_format'=>'Etkinlik Başlangıç Tarihi Geçerli Formatta Değil.',
			'event_end.date_format'=>'Etkinlik Bitiş Tarihi Geçerli Formatta Değil.'
			);
		$validator = Validator::make(Input::all(), $rules, $messages);
		if ($validator->fails()) {
			Session::flash('notification',array('head'=>'Bilgilendirme Mesajı!','text'=>'Form Hatalı Dolduruldu.','type'=>'error'));
			return Redirect::to('admin/event')->withErrors($validator)->withInput();
		}else{
			$active=new Active;
			$active->name=Input::get('name');
			$active->link=Input::get('link');
			$active->user_id=Auth::id();
			$active->event_start=Input::get('event_start');

			$active->more_day=(Input::get('more_day')==true?1:0);
			if (Input::get('more_day')==true) {
				$active->event_end=Input::get('event_end');
			}
			$active->save();
			return Redirect::to('admin/event');
		}
	}

	/**
	 * Display the specified resource.
	 * GET /event/{id}
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
	 * GET /event/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$actives = Active::find($id);
		return View::make('admin.event.event-edit',compact('actives'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /event/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules=array(
			'name'=>'required',
			'link'=>'required',
			'event_start'=>'required|date_format:Y-m-d',
			'event_end'=>'date_format:Y-m-d'
			);

		$messages=array(
			'name.required'=>'Etkinlik Adı Boş Geçilemez!',
			'link.required'=>'Etkinlik Linki boş geçilemez.',
			'event_start.required'=>'Etkinlik Tarihi Boş Geçilemez.',
			'event_start.date_format'=>'Etkinlik Başlangıç Tarihi Geçerli Formatta Değil.',
			'event_end.date_format'=>'Etkinlik Bitiş Tarihi Geçerli Formatta Değil.'
			);
		$validator = Validator::make(Input::all(), $rules, $messages);
		if ($validator->fails()) {
			Session::flash('notification',array('head'=>'Bilgilendirme Mesajı!','text'=>'Form Hatalı Dolduruldu.','type'=>'error'));
			return Redirect::to('admin/event/'.$id.'/edit')->withErrors($validator)->withInput();
		}else{
			$active=Active::find($id);
			$active->name=Input::get('name');
			$active->link=Input::get('link');
			$active->user_id=Auth::id();
			$active->event_start=Input::get('event_start');

			$active->more_day=(Input::get('more_day')==true?1:0);
			if (Input::get('more_day')==true) {
				$active->event_end=Input::get('event_end');
			}
			$active->save();
			return Redirect::to('admin/event');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /event/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$active=Active::find($id);
		$active->deleted=1;
		$active->save();
		Session::flash('notification',array('head'=>'Bilgilendirme Mesajı!','text'=>'Etkinlik Başarıyla Silindi.','type'=>'success'));
		return Redirect::to('admin/event');
	}

}