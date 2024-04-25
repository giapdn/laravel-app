<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.layouts.dashboard');
});

Route::prefix('admin')->group(function () {
    Route::get('dashboard', function () {
        return view('admin.pages.dashboard');
    });
    Route::get('form', function () {
        return view('admin.posts.list');
    });
});
