<?php
Route::get('/', 'KJunitController@index');
Route::post('/', 'KJunitController@store')->name('junit.store');

// 测试路由
Route::get('test', 'TestController@index');
