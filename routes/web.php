<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('working');
});

Route::get('/dersler', function () {
    return view('lessons');
});

Route::get('/test', function () {
    return view('homepage');
});