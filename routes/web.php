<?php
Route::get('/', function () {
    return view('index');
});

Route::get('/register', 'Auth\UserController@register');
Route::post('/register', 'Auth\UserController@register');
