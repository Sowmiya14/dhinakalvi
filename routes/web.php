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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('story');
});
Route::get('/1', function () {
    return view('demo1');
});
Route::get('/next', function () {
    return view('master.next');
});

Route::get('/tag', function () {
    return view('story');
});

Route::get('/content', function(){
	 return view('story');
});

Route::get('/demo', function(){
	 return view('admin.home');
});



Auth::routes();

Route::get('/home', 'admin_controller@admin')->name('home');

Route::get('/add_category', 'admin_controller@add')->name('category.add');
Route::post('/create_category', 'admin_controller@create')->name('category.create');
Route::get('/show', 'admin_controller@show_category')->name('category.show');
Route::get('/show_category/edit/{id}', 'admin_controller@edit')->name('category.edit');
Route::post('/show_category/update/{id}', 'admin_controller@update')->name('category.update');
Route::get('/show_category/delete/{id}', 'admin_controller@delete')->name('category.delete');
Route::get('/content_section1', 'admin_controller@content_section1')->name('content_section1');






