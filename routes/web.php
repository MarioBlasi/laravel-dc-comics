<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/comics', [PageController::class, 'index'])->name('home');
Route::resource('admin/fumettis', FumettiController::class);

// Route::get('/comics', [PageController::class, 'index'])->name('comics.index');
// Route::get('/comics/create', [PageController::class, 'create'])->name('comics.create');
// Route::post('/comics', [PageController::class, 'store'])->name('comics.store');
// Route::get('/comics/{id}', [PageController::class, 'show'])->name('comics.show');


