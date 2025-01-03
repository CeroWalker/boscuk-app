<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LessonsController;
use App\Http\Controllers\LessonController;

use  App\Http\Controllers\CulturesController;
use  App\Http\Controllers\CultureController;

use  App\Http\Controllers\GuidesController;
use  App\Http\Controllers\GuideController;

use  App\Http\Controllers\ToolsController;
use  App\Http\Controllers\GamesController;

use  App\Http\Controllers\QuizController;

Route::get('/', function () {
    return view('homepage');
});

Route::get('oyun/dc', function (){
    return view('games/tod');
});


Route::resource('/dersler', LessonsController::class);
Route::get('/ders-ara',[LessonsController::class,'search']);
Route::resource("/araclar", ToolsController::class);
Route::resource("/oyunlar", GamesController::class);
Route::resource("/genel-kultur", CulturesController::class);
Route::resource("/rehberler", GuidesController::class);
Route::resource('/testler', QuizController::class);
