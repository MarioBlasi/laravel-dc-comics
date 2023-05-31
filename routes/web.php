<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ComicController;
use App\Http\Controllers\PageController;

use App\Http\Controllers\Admin\FumettiController;

Route::get('/', [PageController::class, 'index'])->name('home');
// Route::resource('admin/fumettis', FumettiController::class,['as' => 'admin']);


// Route::get('/fumettis/create', [FumettiController::class, 'create'])->name('fumettis.create');
// Route::post('/fumettis', [FumettiController::class, 'store'])->name('fumettis.store');
// Route::get('/fumettis/{fumetti}', [FumettiController::class, 'show'])->name('fumettis.show');
// Route::put('/fumettis/{fumetti}', [FumettiController::class, 'update'])->name('fumettis.update');

// Route::get('/fumettis', [FumettiController::class, 'index'])->name('fumettis.index');

Route::resource('fumettis', FumettiController::class);






