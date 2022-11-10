<?php

namespace App\Controller;

use App\Model\CadastroModel;

class CadastroController extends Controller
{
    public static function index()
    {
        parent::render('Cadastro/FormCadastro');
    }

    public static function form()
    {
        $model = new CadastroModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);

        parent::render('Cadastro/FormCadastro', $model);
    }

    public static function save()
    {
        $cadastro = new CadastroModel();

        $cadastro->id = $_POST['id'];
        $cadastro->nome = $_POST['nome'];
        $cadastro->email = $_POST['email'];
        $cadastro->senha = $_POST['senha'];
        $cadastro->save();

        header("Location: /login");
    }

    public static function update()
    {
        $model = new CadastroModel();

        parent::render('Cadastro/FormAlterarDados', $model);
    }
}