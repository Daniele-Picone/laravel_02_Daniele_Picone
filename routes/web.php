<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ServiceController;

Route::get('/', function () {
    return view('homepage');
})->name('homepage');


Route::get('about-me', function(){
    return view('aboutme');
})->name('aboutme');

Route::get('service', [ServiceController::class, 'service'])->name('services');

Route::get('/service/detail/{name}', [ServiceController::class,'dettaglio'])->name('service.detail');

Route::get('articles', [ArticleController::class, 'articles'])->name('articles');

Route::get('/articles/detail/{name}' , [ArticleController::class , 'articleDetail']  )->name('articles.detail');
