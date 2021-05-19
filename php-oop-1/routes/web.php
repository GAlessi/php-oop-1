<?php

use Illuminate\Support\Facades\Route;



Route::get('/home', 'TestController@home')
    -> name('home');
