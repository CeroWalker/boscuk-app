<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LessonsController;
Route::get('/', function () {
    return view('working');
});

Route::resource('/dersler', LessonsController::class);

Route::get('/test', function () {
    return view('homepage');
});
