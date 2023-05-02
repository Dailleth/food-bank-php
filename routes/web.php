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

// miweb.com/api/users/create ...
// miweb.com/api/users/delete ...
// miweb.com/api/auth/login ...

Route::prefix('api', function() {
    // Route::middleware([''], function() { // middleware que protege ruta...
        Route::prefix("users", function() {
            Route::post("create", [UsersController::class, "createUsers"]);
            Route::get("read", [UsersController::class, "readUsers"]);
            Route::put("update", [UsersController::class, "updateUsers"]);
            Route::delete("delete", [UsersController::class, "deleteUsers"]);
        });
    // });

       Route::prefix('auth', function() {
         Route::post('login', [LoginController::class, "auth"]);
       });
});
