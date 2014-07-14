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

Route::get('/', function()
{
	return View::make('hello');
});

/*
Route::get('login', function() {
	return View::make('admin.auth.login');
});
*/

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

    Route::get('admin/posts/create/{type?}', array('as' => 'post-create', 'uses' => 'PostController@create'));
    Route::get('admin/posts/page/', array('as' => 'page-list', 'uses' => 'PostController@pageindex'));
    Route::get('admin/posts/trash/', array('as' => 'post-trash', 'uses' => 'PostController@trashindex'));
    Route::get('admin/posts/trash/{id}', array('as' => 'post-recovery', 'uses' => 'PostController@postRecovery'));
    Route::resource('admin/posts', 'PostController',
        array(
            'names'=>array(
                'index'     =>'post-list',
                'create'    =>'post-create',
                'store'     =>'post-store',
                'edit'      =>'post-edit',
                'update'    =>'post-update',
                'destroy'   =>'post-delete',
                'show'      =>'post-show'
                )
            )
        );

/*
|---------------------------------------------------------------------------------------------
| Event
|---------------------------------------------------------------------------------------------
*/

Route::resource('admin/event', 'EventController');

Route::controller('admin/media', 'MediaController');

});


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