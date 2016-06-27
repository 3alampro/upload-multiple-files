<?php

Route::get('/', function () {
    return view('welcome');
});

Route::post('upload', ['as' => 'store', 'uses' => 'HomeController@store']);
