<?php

use LionRoute\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;

/**
 * ------------------------------------------------------------------------------
 * Web Routes
 * ------------------------------------------------------------------------------
 * Here is where you can register web routes for your application
 * ------------------------------------------------------------------------------
 **/

Route::prefix('api', function() {
    Route::prefix('auth', function() {
        Route::post('login', [LoginController::class, "auth"]);
        Route::put("update", [LoginController::class, ""]);
    });

    Route::middleware(['jwt-authorize'], function() {
        Route::prefix('profile', function() {
            Route::get('read', [ProfileController::class, 'readProfile']);
        });

        Route::middleware(['admin-access'], function() {
            Route::prefix('admin', function() {
                Route::prefix("users", function() {
                    Route::post("create", [UsersController::class, "createUsers"]);
                    Route::get("read", [UsersController::class, "readUsers"]);
                    Route::put("update", [UsersController::class, "updateUsers"]);
                    Route::delete("delete", [UsersController::class, "deleteUsers"]);
                });
            });
        });
    });
});
