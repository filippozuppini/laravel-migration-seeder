<?php

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('home');
