<?php

use App\Http\Controllers\ActorsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

Route::get('/',[MoviesController::class,'index'])->name('movies.index');
Route::get('/movies/{movie}',[MoviesController::class,'show'])->name('movies.show');


Route::get('/actors',[ActorsController::class,'index'])->name('actors.index');
Route::get('/actors/{actors}',[ActorsController::class,'show'])->name('actors.show');
