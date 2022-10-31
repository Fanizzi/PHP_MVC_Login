<?php

namespace App\DAO;

use App\Model\CadastroModel;
use \PDO;

class CadastroDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(CadastroModel $model)
    {
        $sql = "INSERT INTO cadastro (nome, email, senha)
                VALUES (?, ?, ?)";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->email);
        $stmt->bindValue(3, $model->senha);

        $stmt->execute();
    }

    public function selectByEmailAndSenha($email, $senha)
    {
        $sql = "SELECT * FROM usuario WHERE email = ? and senha = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->bindValue(2, $senha);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\CadastroModel");
    }
}