<?php

namespace App\Http\Controllers;

use App\Models\ProfileModel;
use Database\Class\FoodBank\ReadUsers;
use LionSecurity\JWT;

class ProfileController {

	private ProfileModel $profileModel;
    private object $jwt;

	public function __construct() {
		$this->profileModel = new ProfileModel();
        $this->jwt = JWT::decode(JWT::get());
	}


	public function readProfile() {
        return $this->profileModel->readProfileDB(
            (new ReadUsers())->setIdusers($this->jwt->data->idusers)
        );
	}

	public function update() {

	}

}
