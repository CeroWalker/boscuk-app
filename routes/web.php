<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LessonsController;
use  App\Http\Controllers\ToolsController;
use  App\Http\Controllers\GamesController;
use  App\Http\Controllers\CultureController;
use  App\Http\Controllers\ArticlesController;

Route::get('/', function () {
    return view('working');
});

Route::get('/test', function () {
    return view('homepage');
});

Route::resource('/dersler', LessonsController::class);
Route::resource("/araclar", ToolsController::class);
Route::resource("/oyunlar", GamesController::class);
Route::resource("/genel-kultur", CultureController::class);
Route::resource("/makaleler", ArticlesController::class);
