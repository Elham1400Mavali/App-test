<?php

use App\Http\Controllers\ElhamController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SurveyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/survey/step/{step}', [SurveyController::class, 'showForm'])->name('survey.form');
Route::post('/survey/step/{step}', [SurveyController::class, 'submitForm']);


Route::get('/advertise-step/{step}', [ImageController::class, 'showRandomStep'])->name('random.step');
Route::post('/advertise-step/{step}', [ImageController::class, 'imageStep'])->name('random.step.store');;


Route::get('/random/complete', [ImageController::class, 'complete'])->name('random.complete');



