<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Load authentication routes (login/register/logout)
require __DIR__.'/auth.php';