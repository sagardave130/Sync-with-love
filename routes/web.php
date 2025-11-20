<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('enter-code', function () {
    return view('pages.enter-code');
})->name('enter-code');

Route::get('game.create', function () {
    return view('pages.enter-code');
})->name('game.create');

// Static informational pages
Route::view('privacy', 'pages.essentials.privacy')->name('privacy');
Route::view('terms', 'pages.essentials.terms')->name('terms');
Route::view('contact', 'pages.essentials.contact')->name('contact');
