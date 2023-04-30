<?php

namespace App\Rules\Users;

use App\Traits\Framework\ShowErrors;

class UsersIdRolesRule {

	use ShowErrors;

	public static string $field = "idroles";

	public static function passes(): void {
		self::validate(function(\Valitron\Validator $validator) {
			$validator->rule("required", self::$field)->message("property is required");
		});
	}

}
