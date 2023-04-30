<?php

namespace App\Rules\Users;

use App\Traits\Framework\ShowErrors;

class UsersNameRule {

	use ShowErrors;

	public static string $field = "users_name";

	public static function passes(): void {
		self::validate(function(\Valitron\Validator $validator) {
			$validator->rule("required", self::$field)->message("property is required");
		});
	}

}
