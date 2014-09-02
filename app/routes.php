<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Route::get('/', function()
{   $news=POST::all();
	return View::make('btp.home',compact('news'));
});*/
/*
Route::get('news', function()
{   
    
    $news = Cache::remember('news', 15, function()
    {
        return POST::where('deleted','=','0')->where('cat_id','=','1')->orderBy('id', 'DESC')->paginate(5)->getItems();
    });

    $news=POST::where('deleted','=','0')->where('cat_id','=','1')->orderBy('id', 'DESC')->paginate(5);
    return View::make('btp.news',compact('news'));
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
| Single Routes
|---------------------------------------------------------------------------------------------
*/
/*RSS*/
Route::get('feed/rss', array('as' => 'rss', 'uses' => 'FeedController@index'));

/*Teşkilat--START*/
Route::get('teskilat', function(){ return View::make('btp.teskilat'); });
Route::get('city', array('as' => 'city', 'uses' => 'FeedController@city'));
/*Teşkilat--END*/

/*
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
});

Route::get('event', array('as' => 'event-json', 'uses' => 'EventController@eventJson'));





/*
|---------------------------------------------------------------------------------------------
| THEME ROUTING // ESKİYE UYUMLU
|---------------------------------------------------------------------------------------------
*/

Route::get('content/k/{id?}/{slug?}', function($id=1,$page=1)
{
    $news=POST::where('deleted','=','0')->where('cat_id','=',$id)->orderBy('id', 'DESC')->paginate(5);
    $cat=CAT::find($id);
    return View::make('btp.news',compact('news','cat'));
});

Route::get('content/view/{id?}/{slug?}', function($id=1,$page=1)
{
    $article=POST::find($id); 
    //return var_dump($article);
    return View::make('btp.single',compact('article'));
});

Route::controller('/', 'HomeController');
/*
|---------------------------------------------------------------------------------------------
| ROUTE Filters
|---------------------------------------------------------------------------------------------
*/
Route::filter('toLogin', function () {
    
    if (Auth::check()) {
        Session::flash('message',array('text'=>'Zaten Giriş Yapılmış.', 'type'=>'success'));
    	return Redirect::route('admin');
    }
});
Route::filter('doLogin', function () {
    
    if (!Auth::check()) {
    	Session::flash('message',array('text'=>'Giriş Yapmalısınız.', 'type'=>'danger'));
    	return Redirect::to('login');
    }
});

 

