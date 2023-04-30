<?php

namespace App\Rules\Users;

use App\Traits\Framework\ShowErrors;

class UsersPasswordRule {

	use ShowErrors;

	public static string $field = "users_password";

	public static function passes(): void {
		self::validate(function(\Valitron\Validator $validator) {
			$validator->rule("required", self::$field)->message("Digite su contraseña");
		});
	}

}
