<?php

// use Illuminate\Routing\Route;

// use Illuminate\Support\Facades\Request;

use Elmmac\Laravelcontactform\Http\Controllers\ContactController;
// use Illuminate\Http\Request;

// Route::get('contact', [ContactController::class, 'index'])->name('contact');

// Route::post('contact', [ContactController::class, 'send']);

// or you can use the group route

Route::group(['namespace' => 'Elmmac\Laravelcontactform\Http\Controllers'], function () {
    Route::get('contact', [ContactController::class, 'index'])->name('contact');

    Route::post('contact', [ContactController::class, 'send']);
});
