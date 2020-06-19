<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');
Route::post('/form-submitted','FormController@submit')->name('form.submit');
Route::get('/form-data' , 'FormController@formdata')->name('form.data');
Route::get('/about-us', function () {
    return view('aboutus');
})->name('about.us');
Route::group(['prefix' => 'products'], function(){
	Route::get('/sticks', function(){
		return view('products.sticks');
	});
	Route::get('/straw', function(){
		return view('products.straw');
	});
	Route::get('/stirrer', function(){
		return view('products.stirrer');
	});
	Route::get('/skewers', function(){
		return view('products.skewers');
	});
});
Route::get('/blog', 'BlogController@view')->name('blog.main.view');
Route::get('/marco-bamboo/dashboard/blog', 'BlogController@adminView')->name('blog.view');
Route::get('/blog/{path}' , 'BlogController@blogview')->name('blog.post.view');
Route::get('/create-blog', function () {
    return view('blog.create');
});
Route::post('/blog/post/create', 'BlogController@create')->name('blog.create');
Route::post('/blog/post/delete/{id}', 'BlogController@del')->name('blog.delete');




Route::get('/blog-view', function () {
    return view('blog.view');
});