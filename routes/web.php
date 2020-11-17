<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function (){
    return view('contactS');
});

Route::get('/news', function (){
    return view('news');
});
