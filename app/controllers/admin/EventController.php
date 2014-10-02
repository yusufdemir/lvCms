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
			/*****************SEND MAİL******************/

		$teskilatUsers=Teskilat::where('role','=','99')->get();
		$getevetn=Active::first();
		$link='<br><a href="'.$getevetn->link.'">'.$getevetn->name.'</a>';
		$data=array('news'=> $link );
		foreach ($teskilatUsers as $user) {
			if ( filter_var($user->email, FILTER_VALIDATE_EMAIL) ){ 
				Mail::later(600, 'emails.newsslatter', $data, function($message) use ($user){
				    $message->from('info@btp.org.tr', 'BTP');
					$message->to( $user->email , 'BTP Bildiri')->subject('BTP Bilgilendirme Servisi!');
				});
			}
		}

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

//{ "date": "2013-03-23 17:30:00", "type": "meeting", "title": "Test Next Year", "description": "Lorem Ipsum dolor set", "url": "http://www.event3.com/" }
	public function eventJson()
	{
	    /*$Events = Cache::remember('eventsSidebar', 60, function(){
			return*/$Events= Active::where('deleted','=','0')->get();
	    //});
		//$Events=Active::where('deleted','=','0')->get();

		$response= array();
		foreach ($Events as $event) {
			if($event->more_day==1){
				$start=strtotime($event->event_start);
				$end=strtotime($event->event_end);
				$fark=$end-$start;
				$fark = ($fark/60/60/24);
				for ($i=0; $i <= $fark ; $i++) { 
					$response[]=array(
						'date' 	=> date("Y-m-d H:i:00",strtotime($event->event_start. ' + '.$i.' days')),
						'type' 	=> 'meeting',
						'title'	=> $event->name,
						'description'=>'',
						'url'	=> $event->link
					);
				}
			}else{
				$response[]=array(
					'date' 	=> $event->event_start, 
					'type' 	=> 'meeting',
					'title'	=> $event->name,
					'description'=>'',
					'url'	=> $event->link
				);
			}


		}
		return Response::json($response);
	}

}