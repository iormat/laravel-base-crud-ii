<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index') -> name('home');
Route::get('/movie/show{id}', 'HomeController@show') -> name('movie');
