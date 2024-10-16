<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/entertainment/rierlam', function () {
    return view('entertainment.rierlam');
});

Route::get('/entertainment/palletia', function () {
    return view('entertainment.palletia');
});

