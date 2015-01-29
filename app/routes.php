<?php

Route::any('login', 'UserController@login');
Route::any('register', 'UserController@register');
Route::any('/', 'HomeController@all_collection');
Route::any('registerAction', 'UserController@registerAction');
Route::any('showdata', 'UserController@showData');
Route::any('delete/{id?}', 'UserController@delete');
Route::any('doLogin', 'UserController@doLogin');
Route::any('logout', 'UserController@logout');


Route::any('admin', 'AdminController@admin');
Route::any('all_collection', 'ProductController@all_collection');

Route::group(['prefix' => 'api/vi', 'before'=>'oauth'], function(){
	Route::resource('posts','PostsController');
});

Route::post('oauth/access_token', function() {
    return Response::json(Authorizer::issueAccessToken());
});
