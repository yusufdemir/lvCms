<?php
use Illuminate\Database\Eloquent\ModelNotFoundException;
/*Route::get('/', function()
{   $news=POST::all();
	return View::make('btp.home',compact('news'));
});*/
/*
Route::get('testevent', function()
{
    return View::make('hello');
});*/
/*
Route::get('login', function() {
	return View::make('admin.auth.login');
});
*/

/*
|---------------------------------------------------------------------------------------------
| THEME ROUTING // ESKİYE UYUMLU
|---------------------------------------------------------------------------------------------
*/
//Route::controller('/', 'HomeController');
Route::get('/', array('uses' => 'HomeController@getIndex'));

Route::get('content/k/{id?}/{slug?}', array('uses' => 'HomeController@categories'));
Route::get('content/view/{id?}/{slug?}', array('uses' => 'HomeController@show'));
/*Biyografi*/
Route::get('/user/biography/1/prof-dr-haydar-bas', array('uses' => 'HomeController@biography'));

/*RSS*/
Route::get('feed/rss', array('as' => 'rss', 'uses' => 'FeedController@index'));
/*Teşkilat--START*/
Route::get('yonetim/teskilat', function(){ return View::make('btp.teskilat'); });
Route::get('yonetim/city', array('as' => 'city', 'uses' => 'HomeController@city'));
/*Başkanlıklar*/
Route::get('yonetim/baskanliklar', function() { return View::make('btp.baskanliklar'); });
Route::get('yonetim/myk', function() { return View::make('btp.myk'); });
Route::get('yonetim/ydk', function() { return View::make('btp.ydk'); });

Route::get('/gallery', array('uses' => 'HomeController@gallery'));
Route::get('/gallery/view/{id?}/{slug?}', array('uses' => 'HomeController@galleryShow'));
Route::get('bot', array('uses' => 'HomeController@hbkaleminden'));
Route::get('event', array('as' => 'event-json', 'uses' => 'EventController@eventJson'));

Route::controller('/newsslatter', 'NewsslatterController');

App::missing(function($exception){
    return Response::view('btp.404', array(), 404);
});

App::error(function(ModelNotFoundException $e){
    return Response::view('btp.404', array(), 404);
});
/* ADMİN START
|---------------------------------------------------------------------------------------------
| AUTH
|---------------------------------------------------------------------------------------------
*/
Route::group(array('before' => 'toLogin'), function() {
	//Route::controller('login', 'UserController');
    Route::get('login', array('as' => 'login','uses'=>'UserController@index'));
	Route::post('login', array('as' => 'postLogin','uses'=>'UserController@login'));
});
Route::any('logout', array('as' => 'logout','uses'=>'UserController@anyLogout'));

/*
|---------------------------------------------------------------------------------------------
| DASHBOARD
|---------------------------------------------------------------------------------------------
*/
Route::group(array('before' => 'doLogin'), function() {

    Route::resource('admin/dashboard', 'DashboardController',
        array(
            'names'=>array(
                'index'=>'dashboard'
                )
            )
        );
    //Route::resource('admin', 'DashboardController');
    Route::get('admin', function() {return Redirect::route('dashboard'); });
    /*
    |---------------------------------------------------------------------------------------------
    | POST & PAGE
    |---------------------------------------------------------------------------------------------
    */
    Route::get('admin/post/trash/', array('as' => 'post-trash', 'uses' => 'PostController@trashindex'));
    Route::get('admin/post/trash/{id}', array('as' => 'post-recovery', 'uses' => 'PostController@postRecovery'));
    Route::resource('admin/post', 'PostController');


    Route::resource('admin/teskilat', 'TeskilatController');

    /*
    |---------------------------------------------------------------------------------------------
    | Event
    |---------------------------------------------------------------------------------------------
    */
    Route::resource('admin/event', 'EventController');
    /*
    |---------------------------------------------------------------------------------------------
    | MEDİA
    |---------------------------------------------------------------------------------------------
    */
    Route::controller('admin/media', 'MediaController');
    /*
    |---------------------------------------------------------------------------------------------
    | USER
    |---------------------------------------------------------------------------------------------
    */
    Route::get('admin/user/list', array('uses' => 'UserController@listuser'));
    Route::resource('admin/user', 'UserController');
});



/*
|---------------------------------------------------------------------------------------------
| ROUTE Filters
|---------------------------------------------------------------------------------------------
*/
Route::filter('toLogin', function () {
    
    if (Auth::check()) {
        Session::flash('message',array('text'=>'Zaten Giriş Yapılmış.', 'type'=>'success'));
    	return Redirect::to('/admin');
    }
});
Route::filter('doLogin', function () {
    
    if (!Auth::check()) {
    	Session::flash('message',array('text'=>'Giriş Yapmalısınız.', 'type'=>'danger'));
    	return Redirect::to('login');
    }
});