<?php
 

Route::get('/', 'HomeController@index');
Route::get('/requirements', 'RequirementsController@index');
Route::get('/photos', 'PhotosController@index');
Route::get('/videos', 'VideosController@index');


Route::group(['prefix' => 'admin_backpage'], function () {
    Voyager::routes();
});
