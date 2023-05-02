<?php

namespace App\Http\Controllers\Auth;


use App\Models\Auth\LoginModel;
use Database\Class\FoodBank\Users;

class LoginController {

    private LoginModel $loginModel;

    public function __construct() {
        $this->loginModel = new LoginModel();
    }

    public function auth() {
        return $this->loginModel->authDB();
    }

}
