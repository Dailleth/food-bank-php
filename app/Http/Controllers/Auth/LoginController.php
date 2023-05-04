<?php

namespace App\Http\Controllers\Auth;


use App\Models\Auth\LoginModel;
use Database\Class\FoodBank\Users;
use LionSecurity\JWT;
use LionSecurity\RSA;
use LionSQL\Functions;

class LoginController {

    private LoginModel $loginModel;

    public function __construct() {
        $this->loginModel = new LoginModel();
    }

    public function auth() {
        $users = Users::formFields();
        $cont = $this->loginModel->authDB($users);

        if ($cont->cont === 0) {
            return error("El email/password es incorrecto");
        }

        $session = $this->loginModel->sessionDB($users);
        $decode_rsa = RSA::decode(['users_password' => $session->users_password]);

        if ($decode_rsa->users_password != request->users_password) {
            return error("El email/password es incorrecto");
        }

        $user_name = $session->users_name . " " . $session->users_lastname;
        return success("Bienvenido: {$user_name}", [
            'jwt' => JWT::encode([
                'session' => true,
                'idusers' => $session->idusers,
                'idroles' => $session->idroles
            ])
        ]);
    }

}
