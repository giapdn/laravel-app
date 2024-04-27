<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;


/*
    Default Route
*/

Route::get('/', function () {
    return view('admin.pages.dashboard');
});

/*
    Admin Route
*/

Route::prefix('admin')->group(function () {
    Route::get('dashboard', function () {
        return view('admin.pages.dashboard');
    });
    Route::get('users', [UsersController::class, 'index']);
});

/*
    Client Route
*/

Route::prefix('client')->group(function () {
});
