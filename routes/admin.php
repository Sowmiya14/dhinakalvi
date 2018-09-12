<?php

Route::get('/home', 'DashboardController@Category')->name('home');

Route::get('category/add', 'CategoryController@show');
Route::post('category/add', 'CategoryController@add')->name('add_category');
Route::get('category/view', 'CategoryController@view');
Route::get('category/{id}/edit', 'CategoryController@showEdit')->name('edit_category');
Route::post('category/edit/{id}','CategoryController@update')->name('update_category');
Route::delete('/category/{id}','CategoryController@delete')->name('destory_category');