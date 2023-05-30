<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ComicController;
use App\Http\Controllers\PageController;

use App\Http\Controllers\Admin\FumettiController;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::resource('admin/fumettis', FumettiController::class);


