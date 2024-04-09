<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;

Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::get('/item', function () {
    return view('secondpage');
})->name('item');

Route::get('/allMovies', [PageController::class, 'movieDisplayer']);