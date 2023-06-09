<?php

namespace App\Models;

use Database\Class\FoodBank\Users;
use Database\Class\FoodBank\ReadUsers;
use LionSQL\Drivers\MySQL as DB;


class ProfileModel {

	public function __construct() {

	}

	public function readProfileDB(ReadUsers $readUsers) {
        return DB::view('read_users')
        ->select()
        ->where(DB::equalTo('idusers'), $readUsers->getIdusers())
        ->get();
    }


    public function updatePasswordDB(Users $users) {
        return DB::call('update_password', [
            $users->getUsersPassword(),
            $users->getIdusers()
        ])->execute();
    }

}
