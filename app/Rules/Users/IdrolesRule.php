<?php

namespace App\Rules\Users;

use App\Traits\Framework\ShowErrors;

class IdrolesRule {

	use ShowErrors;

	public static string $field = "idroles";

	public static function passes(): void {
		self::validate(function(\Valitron\Validator $validator) {
			$validator->rule("required", self::$field)->message("El rol es un dato requerido");
		});
	}

}
