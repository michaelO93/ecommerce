<?php

Route::any('login', 'UserController@login');
Route::any('register', 'UserController@register');
Route::any('/', 'UserController@register');
Route::any('registerAction', 'UserController@registerAction');
Route::any('showdata', 'UserController@showData');
Route::any('delete/{id?}', 'UserController@delete');
Route::any('doLogin', 'UserController@doLogin');
Route::any('logout', 'UserController@logout');


Route::any('admin', 'AdminController@admin');
Route::any('all_collection', 'ProductController@all_collection');

