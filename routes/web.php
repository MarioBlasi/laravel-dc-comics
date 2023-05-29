<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');
Route::get('/comics/{id}', [ComicController::class, 'show'])->name('comics.show');


