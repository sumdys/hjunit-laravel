<?php
Route::get('/', 'HJunitController@index');
Route::post('/', 'HJunitController@store')->name('junit.store');

Route::get('test', 'TestController@index');
 
