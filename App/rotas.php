<?php

use App\Controller\CadastroController;
use App\Controller\LoginController;
use App\Controller\PessoaController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url)
{
    case '/register/form':
        CadastroController::form();
    break;

    case '/register/save':
        CadastroController::save();
    break;

    case '/login':
        LoginController::index();
    break;

    case '/login/auth':
        LoginController::auth();
    break;

    case '/login/update':
        CadastroController::update();
    break;

    case '/logout':
        LoginController::logout();
    break;

    case '/':
        echo "Página Inicial";
    break;

    case '/pessoa':
        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;

    case '/pessoa/form/save':
        PessoaController::save();
    break;

    case '/pessoa/delete':
        PessoaController::delete();
    break;

    default:
        echo "Erro 404";
    break;
}