<?php



Route::any('login','UserController@login');
Route::any('register', 'UserController@register');
Route::any('/', 'UserController@register');
Route::any('registerAction', 'UserController@registerAction');
Route::any('showdata', 'UserController@showData');
Route::any('delete/{id?}', 'UserController@delete');
Route::any('doLogin', 'UserController@doLogin');

