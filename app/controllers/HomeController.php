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
			$cats['slider']			=POST::where('active','=','1')->where('deleted','=','0')->where('slider','=','1')->limit(5)->orderBy('id','DESC')->get();
			return $cats;
	    });
		return View::make('btp.home',compact('cats'));
	}

	public function biography(){
	    $biography = DB::select('SELECT * FROM teskilat WHERE id = ?',array('1'));
		return View::make('btp.singleuser',compact('biography'));
	}
	
	public function categories($id=1){
		$news=POST::where('deleted','=','0')->where('cat_id','=',$id)->orderBy('id', 'DESC')->paginate(5);
    	$cat=CAT::find($id);
    	return View::make('btp.news',compact('news','cat'));
	} 

	public function show($id=1){
		$article=POST::find($id); 
    	return View::make('btp.single',compact('article'));
	}
	
}
