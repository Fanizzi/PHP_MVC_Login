<?php

namespace App\Controller;

use App\Model\CadastroModel;

class CadastroController extends Controller
{
    public static function index()
    {
        parent::render('Login/FormCadastro');
    }

    public static function register()
    {
        $model = new CadastroModel();

        $model->nome = $_POST['nome'];
        $model->email = $_POST['email'];
        $model->senha = $_POST['senha'];
    }

    /*public static function auth()
    {
        $model = new CadastroModel();

        if (isset($model->email))
        {

        }
    }*/
}