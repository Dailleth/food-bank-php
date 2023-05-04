<?php

namespace App\Models;

use Database\Class\FoodBank\Users;
use LionSQL\Drivers\MySQL as DB;
use PhpParser\Builder\Function_;

class UsersModel {

	public function __construct() {
		
	}

	public function createUsersDB(Users $users) {
		return DB::call("create_users", [
			$users->getUsersName(),
			$users->getUsersLastname(),
			$users->getUsersAddress(),
			$users->getUsersEmail(),
			$users->getUsersPassword(),
			$users->getUsersDocument(),
			$users->getUsersDocumentTypes(),
			$users->getUsersPhone(),
			$users->getIdroles()
		])->execute();
	}

	public function readUsersDB() {
		return DB::view("read_users")->select()->getAll();
	}

	public function updateUsersDB(Users $users) {
		return DB::call("update_users", [
			$users->getUsersName(),
			$users->getUsersLastname(),
			$users->getUsersAddress(),
			$users->getUsersEmail(),
			$users->getUsersDocument(),
			$users->getUsersDocumentTypes(),
			$users->getUsersPhone(),
			$users->getIdroles(),
			$users->getIdusers()
		])->execute();
	}

	public function deleteUsersDB(Users $users) {
		return DB::call("delete_users", [
			$users->getIdusers()
		])->execute();

	}


}
