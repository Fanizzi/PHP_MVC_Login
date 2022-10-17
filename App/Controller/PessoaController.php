<?php

namespace App\Controller;

use App\Model\PessoaModel;

class PessoaController extends Controller
{
    public static function index()
    {
        parent::isAuthenticated();

        $model = new PessoaModel();
        $model->getAllRows();

        parent::render('Pessoa/ListaPessoa', $model);
    }

    public static function form()
    {
        parent::isAuthenticated();

        $model = new PessoaModel();

        if(isset($_GET['id']))
        {
            $model = $model->getById( (int) $_GET['id']);
        }
        
        parent::render('Pessoa/FormPessoa', $model);
    }

    public static function save()
    {
        parent::isAuthenticated();

        $model = new PessoaModel();

        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->cpf = $_POST['cpf'];
        $model->data_nascimento = $_POST['data_nascimento'];

        $model->save();

        header("Location: /pessoa");
    }

    public static function delete()
    {
        parent::isAuthenticated();
        
        $model = new PessoaModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /pessoa");
    }
}