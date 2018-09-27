<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

//Auth
Route::group(['namespace' => 'Auth', 'prefix' => 'auth'], function(){

    // Authentication Routes...
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout')->name('logout');

    // Registration Routes...
    Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'RegisterController@register');

    // Password Reset Routes...
    Route::group(['prefix' => 'password', 'as' => 'password.'], function(){
	    Route::get('reset', 'ForgotPasswordController@showLinkRequestForm')->name('request');
	    Route::post('email', 'ForgotPasswordController@sendResetLinkEmail')->name('email');
	    Route::get('reset/{token}', 'ResetPasswordController@showResetForm')->name('reset');
	    Route::post('reset', 'ResetPasswordController@reset');
    });

});

//Application
Route::group(['prefix' => 'application', 'namespace' => 'Project', 'as' => 'app.'], function(){

	Route::get('/new', 'ProjectController@new')->name('new');
	Route::post('/new', 'ProjectController@store');
	
	Route::get('/lists', 'ProjectController@lists')->name('lists');

	// Manage application
	Route::group(['prefix' => 'manage/{project}', 'as' => 'manage.'], function(){

		Route::get('domain', 'DomainController@index')->name('domain');
		Route::get('setting', 'SettingController@index')->name('setting');
		Route::get('backup', 'BackupController@index')->name('backup');
		Route::get('upgrade', 'SettingController@upgrade')->name('upgrade');

		// Application SSL
		Route::group(['prefix' => 'ssl', 'as' => 'ssl.'], function(){

			Route::get('/', 'CertificateController@index')->name('index');
			Route::get('/generate', 'CertificateController@generate')->name('create');

		});

		// View application access detail 
		Route::get('detail', 'ProjectController@detail')->name('detail');
	});

});

// Account setting
Route::group(['prefix' => 'dashboard', 'namespace' => 'Account', 'as' => 'dashboard.'], function(){

	Route::get('/', 'DashboardController@index')->name('index');
	Route::get('/billing', 'PaymentController@index')->name('billing');
	Route::get('/password', 'PasswordController@index')->name('password');
	
	// SSH Keys
	Route::group(['prefix' => 'ssh', 'as' => 'ssh.'], function(){

		Route::get('/', 'SSHController@index')->name('index');
		Route::get('/add', 'SSHController@generate')->name('generate');
		Route::get('/view', 'SSHController@view')->name('view');

	});

});








