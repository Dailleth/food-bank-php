<?php

use LionRoute\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Auth\LoginController;

/**
 * ------------------------------------------------------------------------------
 * Web Routes
 * ------------------------------------------------------------------------------
 * Here is where you can register web routes for your application
 * ------------------------------------------------------------------------------
 **/

Route::get('/', fn() => info('[index]'));

Route::prefix('api', function() {
    Route::middleware(['jwt-authorize', 'admin-access'], function() {
        Route::prefix("users", function() {
            Route::post("create", [UsersController::class, "createUsers"]);
            Route::get("read", [UsersController::class, "readUsers"]);
            Route::put("update", [UsersController::class, "updateUsers"]);
            Route::delete("delete", [UsersController::class, "deleteUsers"]);
        });
    });

    Route::prefix('auth', function() {
        Route::post('login', [LoginController::class, "auth"]);
    });
});
