<?php

class Usuario {
    private $id;
    private $nome;
    private $cpf;
    private $senha;
    private $email;
    private $dataNasc;

    function __construct($nome, $cpf, $senha, $email, $dataNasc) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->senha = $senha;
        $this->email = $email;
        $this->dataNasc = $dataNasc;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }
    
    public function getDataNasc() {
        return $this->dataNasc;
    }
    
    public function getID() {
        return $this->id;
    }

    public function setID($id) {
        return $this->id = $id;
    }
}

?>