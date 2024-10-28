<?php

use Illuminate\Support\Facades\Route;
use Jenssegers\Agent\Agent;

Route::get('/', function () {
    $agent = new Agent();
    if ($agent->isMobile() || $agent->isTablet()) {
        return view('mobilever.welcomemobile');
    } else {
        return view('welcome');
    }
});
Route::get('/oxalydea', function () {return view('linktree.oxalydea');});
Route::get('/fukulian', function () {return view('linktree.fukulian');});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



