<?php

namespace App\Model;

use App\DAO\CadastroDAO;

class CadastroModel extends Model
{
    public $id, $nome, $email, $senha;

    public function registrar()
    {
        $dao = new CadastroDAO();

        $dados_usuario_registrado = $dao->selectByEmailAndSenha($this->email, $this->senha);

        if(is_object($dados_usuario_registrado))
            return $dados_usuario_registrado;
        else
            null;
    }
}