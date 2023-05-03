<?php

namespace App\Rules\Login;

use App\Traits\Framework\ShowErrors;

class LoginUsersEmail {
    use ShowErrors;

    public static string $field = "users_email";

    public static function passes(): void {
        self::validate(function(\Valitron\Validator $validator) {
            $validator->rule("required", self::$field)->message("El campo de correo es requirido");
            $validator->rule("email", self::$field)->message("Digite su correo");
        });
    }
}
