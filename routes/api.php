<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Api', 'as' => 'app'], function(){
	Route::post('/check/{user}', 'ProjectController@validateApp');

});