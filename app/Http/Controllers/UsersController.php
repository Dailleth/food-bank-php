<?php

namespace App\Http\Controllers;

use App\Models\UsersModel;
use Database\Class\FoodBank\Users;
use LionSecurity\RSA;

class UsersController {

	private UsersModel $usersModel;

	public function __construct() {
		$this->usersModel = new UsersModel();
	}

	public function createUsers() {
        $rsa_encode = RSA::encode([
            'users_password' => request->users_password
        ]);

		$response_create = $this->usersModel->createUsersDB(
			Users::formFields()
                ->setUsersPassword($rsa_encode->users_password)
		);

		if ($response_create->status === "database-error") {
			return error("Ocurrio un error al crear el usuario");
		}

		return success("Usuario creado correctamente");
	}

	public function readUsers() {
		return $this->usersModel->readUsersDB();
	}

	public function updateUsers() {
		$response_update = $this->usersModel->updateUsersDB(
			Users::formFields()	
		);

		if ($response_update->status === "database-error") {
			return error("Ocurrio un error al actualizar usuario");
		}

		return success("El usuario se actualizo correctamente");
	}

	public function deleteUsers() {
		$response_delete = $this->usersModel->deleteUsersDB(
			Users::formFields()
		);

		if ($response_delete->status === "database-error") {
			return error("Ocurrio un error al intentar eliminar el usuario");
		}

        return success("Usuario eliminado correctamente");
	}

}
