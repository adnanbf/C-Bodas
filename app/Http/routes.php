<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

// Route::resource('merchant', 'MerchantController');



// Route::post('uploadImageMerchant', 'uploadController@uploadImageMerchant');

//SocialAuth
// Route::get('/redirect', 'SocialAuthController@redirect');
// Route::get('/callback', 'SocialAuthController@callback');

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::resource('user/profile', 'UserController');

    // Route::resource('profile', 'UserController');

    // Route::get('user/profile', 'UserController@index');
    Route::resource('user/editProfile', 'UserController');

});

Route::group(['middleware'=>['web', 'auth']], function()
{
	Route::get('/home', 'HomeController@index');
	Route::get('/', function(){
		if(Auth::user()->userAs == 1){
			return view ('merchant/merchant_home');
		}else{
			return view('pembeli/pembeli_home');
		}
	});
});

Route::get('userAs', ['middleware'=>['web','auth','userAs'],function(){
	return view('merchant/merchant_home');
}]);