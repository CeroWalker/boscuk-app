<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LessonsController;
use App\Http\Controllers\LessonController;
use  App\Http\Controllers\ToolsController;
use  App\Http\Controllers\GamesController;
use  App\Http\Controllers\CulturesController;
use  App\Http\Controllers\ArticlesController;
use  App\Http\Controllers\CultureController;

Route::get('/', function () {
    return view('working');
});

Route::get('/test', function () {
    return view('homepage');
});

Route::resource('/dersler', LessonsController::class);
Route::resource('/ders', LessonController::class);
Route::resource("/araclar", ToolsController::class);
Route::resource("/oyunlar", GamesController::class);
Route::resource("/genel-kultur", CulturesController::class);
Route::resource("/kultur", CultureController::class);
Route::resource("/makaleler", ArticlesController::class);
