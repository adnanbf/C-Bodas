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

    Route::get('/homepage', 'HomeController@showHomepage');

	Route::get('/signin', 'SigninController@showSignin');

	Route::get('/signup', 'SignupController@showSignup');

	Route::get('/signuppembeli', 'SignuppembeliController@showSignuppembeli');

	Route::get('/signuppenjual', 'SignuppenjualController@showSignuppenjual');

    Route::get('/', function(){
		if (!empty(Auth::user())) {
			if(Auth::user()->userAs == 1){
				return view ('templates/homepage');
			}else{
				return view('pembeli/pembeli_home');
			}
		}else{
			return view('templates/homepage');
		}
	});

    Route::resource('user/profile', 'UserController');

    Route::resource('user/editProfile', 'UserController@editProfile');

    Route::resource('merchant/product', 'ProductController');

    Route::resource('merchant/create', 'ProductController@create');

});

Route::get('userAs', ['middleware'=>['web','auth','userAs'], function(){
	return view('templates/penjual');
}]);