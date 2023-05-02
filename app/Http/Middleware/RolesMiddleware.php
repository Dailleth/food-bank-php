<?php

namespace App\Http\Middleware;

use App\Enums\RolesEnum;
use LionSecurity\JWT;

class RolesMiddleware {

	public function __construct() {

	}

    public function adminAccess() {
        $jwt = JWT::decode(JWT::get());

        if ($jwt->data->idroles != RolesEnum::Administrador->value) {
            finish(error("No tiene autorización para acceder a este recurso"));
        }
    }

}
