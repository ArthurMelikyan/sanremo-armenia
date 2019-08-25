<?php

if (env('APP_ENV') === 'production') {
	URL::forceScheme('https');
}

Route::get('/', 'HomeController@index')->name('home');
Route::get('requirements', 'RequirementsController@index')->name('requirements');
Route::get('photos', 'PhotosController@index')->name('photos');
Route::get('videos', 'VideosController@index')->name('videos');
Route::get('news', 'NewsController@index')->name('news');
Route::get('news_{id}', 'NewsController@show')->name('single');
Route::get('press', 'PressController@index')->name('press');
Route::match(['get', 'post'], 'contact', 'ContactController@index')->name('contact');
Route::match(['get', 'post'], 'request', 'RequestController@index')->name('request');
Route::get('about', 'AboutController@index')->name('about');

Route::group(['prefix' => 'admin_page'], function () {
		Voyager::routes();
	});
