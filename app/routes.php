<?php

Route::any('login', 'UserController@login');
Route::any('register', 'UserController@register');
Route::any('/', 'HomeController@all_collection');
Route::any('registerAction', 'UserController@registerAction');
Route::any('showdata', 'UserController@showData');
Route::any('delete/{id?}', 'UserController@delete');
Route::any('doLogin', 'UserController@doLogin');
Route::any('logout', 'UserController@logout');
Route::any('profile', 'UserController@profile');
Route::any('update', 'UserController@update');


Route::any('admin', 'AdminController@admin');

Route::any('myproductupdate/{id?}', 'ProductController@myproductupdate');
Route::any('all_collection', 'ProductController@all_collection');
Route::any('wear', 'ProductController@wear');
Route::any('computer', 'ProductController@computer');
Route::any('hardware', 'ProductController@hardware');
Route::any('eee', 'ProductController@eee');
Route::any('myproducts', 'ProductController@myproducts');


Route::group(['prefix' => 'api/vi', 'before'=>'oauth'], function(){
	Route::resource('posts','PostsController');
});

Route::post('oauth/access_token', function() {
    return Response::json(Authorizer::issueAccessToken());
});

//Route::any('AddToCart/{_id?}', 'SessionController@AddToCart');
Route::any('AddToCart', 'SessionController@AddToCart');
//Route::post('AddToCart/{id}', ['as' => 'timeline.AddToCart', 'uses' => 'SessionController@AddToCart']);

Route::any('cart', 'CartController@Cart');
Route::any('delete_product_session/{id?}', 'SessionController@delete_product_session');