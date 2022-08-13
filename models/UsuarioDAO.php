<?php
require_once 'Database.php';
require_once 'IDAO.php';

class UsuarioDAO implements IDAO {
    private $conexao;

    function __construct() {
        $Database = new Database();
        $this->conexao = $Database->getConexao();
    }

    public function insert($model) {
        $stmt = $this->conexao->prepare(
            "INSERT INTO usuarios (nome, cpf, data_nasc, email, senha) VALUES (:nome, :cpf, :data_nasc, :email, :senha)"
        );
        $stmt->bindValue(':nome', $model->getNome());
        $stmt->bindValue(':email', $model->getEmail());
        $stmt->bindValue(':data_nasc', $model->getDataNasc());
        $stmt->bindValue(':cpf', $model->getCpf());
        $stmt->bindValue(':senha', $model->getSenha());
        return $stmt->execute();
    }
    
    public function delete($id) {
        $stmt = $this->conexao->prepare("DELETE FROM usuarios WHERE ID = :id");
        $stmt->bindValue(':id', $id);
        return $stmt->execute();
    }

    public function getById($id) {
        $stmt = $this->conexao->prepare("SELECT * FROM usuarios WHERE ID = :id");
        $stmt->bindValue(':id', $id);
        return $stmt->execute();
    }

    public function fetchAll() {
        $stmt = $this->conexao->prepare("SELECT * FROM usuarios");
        return $stmt->execute();
    }

    public function update($id, $model) {
        $stmt = $this->conexao->prepare("UPDATE usuarios SET nome = :nome, cpf = :cpf, data_nasc = :data_nasc, email = :email, senha = :senha WHERE ID = :id");
        $stmt->bindValue(':nome', $model->getNome());
        $stmt->bindValue(':email', $model->getEmail());
        $stmt->bindValue(':data_nasc', $model->getDataNasc());
        $stmt->bindValue(':cpf', $model->getCpf());
        $stmt->bindValue(':senha', $model->getSenha());
        $stmt->bindValue(':id', $id);
        return $stmt->execute();
    }
    
    function login($email, $senha) {
        $stmt = $this->conexao->prepare("SELECT * FROM usuarios WHERE senha = :senha AND email = :email");
        $stmt->bindValue(':senha', $senha);
        $stmt->bindValue(':email', $email);
        $stmt->execute();

        if(count($stmt->fetchAll()) == 1) {
            return true;
        }

        return false;
    }
}
?>