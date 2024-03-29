<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Auth;

Route::resource('articles', ArticleController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/articles/cetak_pdf', [ArticleController::class,'cetak_pdf'])->name('cetak_pdf');