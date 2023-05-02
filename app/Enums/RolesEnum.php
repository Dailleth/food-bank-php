<?php

namespace App\Enums;

enum RolesEnum: int {

    case Administrador = 1;
    case Voluntario = 2;
    case Secretaria = 3;
    case Donante = 4;
    case Beneficiario = 5;

}
