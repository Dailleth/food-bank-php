<?php

namespace App\Http\Controllers;

use App\Models\ProfileModel;
use Database\Class\FoodBank\Users;
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

    public function updatePassword() {
        $update_password = $this -> profileModel->updatePasswordDB(
            Users::formFields()
        );
        if ($update_password->status === "database-error") {
            return error("Ocurrio un error al actualizar su contraseña");
        }

        return success("El usuario se actualizo correctamente");
    }

}
