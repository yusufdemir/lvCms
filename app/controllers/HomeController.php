<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{

	    $cats = Cache::remember('catsHome', 60, function(){
	        $cats['genelBaskan']	=POST::where('cat_id','=','1')->where('deleted','=','0')->limit(4)->orderBy('id','DESC')->get();
			$cats['demecler']		=POST::where('cat_id','=','2')->where('deleted','=','0')->limit(4)->orderBy('id','DESC')->get();
			return $cats;
	    });
		return View::make('btp.home',compact('cats'));
	}

}
