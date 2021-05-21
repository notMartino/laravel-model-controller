<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MovieController@indexView') -> name('home');
Route::get('movie/{id}', 'MovieController@movieView') -> name('movieLink');