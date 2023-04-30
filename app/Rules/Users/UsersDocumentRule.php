<?php

namespace App\Rules\Users;

use App\Traits\Framework\ShowErrors;

class UsersDocumentRule {

	use ShowErrors;

	public static string $field = "users_document";

	public static function passes(): void {
		self::validate(function(\Valitron\Validator $validator) {
			$validator->rule("required", self::$field)->message("Digite su numero de documento");
            $validator->rule("numeric", self::$field)->message("Solo se acceptan cararcteres numericos");
		});
	}

}
