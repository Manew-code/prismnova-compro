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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


