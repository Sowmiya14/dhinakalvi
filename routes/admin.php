<?php

Route::get('/home', 'DashboardController@Category')->name('home');

Route::get('category/add', 'CategoryController@show');
Route::post('category/add', 'CategoryController@add')->name('add_category');
Route::get('category/view', 'CategoryController@view');
Route::get('category/{id}/edit', 'CategoryController@showEdit')->name('edit_category');
Route::post('category/edit/{id}','CategoryController@update')->name('update_category');
Route::delete('/category/{id}','CategoryController@delete')->name('destory_category');

Route::get('posts/add', 'PostsController@show');
Route::post('posts/add', 'PostsController@add')->name('add_posts');
Route::get('posts/view', 'PostsController@view');
Route::get('posts/{id}/edit', 'PostsController@showEdit')->name('edit_posts');
Route::post('posts/edit/{id}','PostsController@update')->name('update_posts');
Route::delete('/posts/{id}','PostsController@delete')->name('destory_posts');