<?php

namespace App\Rules\Login;

use App\Traits\Framework\ShowErrors;

class LoginUsersPassword {

	use ShowErrors;

	public static string $field = "users_password";

	public static function passes(): void {
		self::validate(function(\Valitron\Validator $validator) {
			$validator->rule("required", self::$field)->message("Digite su contraseña");
		});
	}
}
