<?php

use Illuminate\Support\Facades\Route;

Route::get('/social', function () {
    return view("socail.index");
});
Route::get('/', function () {
    return view("welcome");
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
