<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',function(){
    return view('index');
})->name('index');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');