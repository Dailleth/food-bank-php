<?php

namespace App\Rules\Users;

use App\Traits\Framework\ShowErrors;

class UsersDocumentTypesRule {

	use ShowErrors;

	public static string $field = "users_document_types";

	public static function passes(): void {
		self::validate(function(\Valitron\Validator $validator) {
			$validator->rule("required", self::$field)->message("property is required");
		});
	}

}
