<?php

namespace App\DAO;
use \PDO;

use App\Model\CadastroModel;

class CadastroDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(CadastroModel $model)
    {
        $sql = "INSERT INTO usuario (nome, email, senha)
                VALUES (?, ?, ?)";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->email);
        $stmt->bindValue(3, $model->senha);

        $stmt->execute();
    }

    public function update(CadastroModel $model)
    {
        $sql = 'UPDATE cadastro SET nome=?, email=?, senha=? WHERE email=?';

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->email);
        $stmt->bindValue(3, $model->nova_senha);
        
        $stmt->execute();
    }

    public function select()
    {
        $sql = 'SELECT * FROM cadastro';

        $stmt = $this->conexao->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function selectById(int $id)
    {
        include_once 'Model/CadastroModel.php';

        $sql = 'SELECT * FROM usuario WHERE id=?';

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\CadastroModel");
    }
}