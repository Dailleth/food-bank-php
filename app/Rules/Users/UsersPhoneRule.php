<?php

namespace App\Rules\Users;

use App\Traits\Framework\ShowErrors;

class UsersPhoneRule {

	use ShowErrors;

	public static string $field = "users_phone";

	public static function passes(): void {
		self::validate(function(\Valitron\Validator $validator) {
			$validator->rule("required", self::$field)->message("Digite su numero de celular");
            $validator->rule("numeric", self::$field)->message("En este campo solo se pueden digitar numeros");
		});
	}

}
