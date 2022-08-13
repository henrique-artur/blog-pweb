<?php
class Database {
    private $username = "root";
    private $senha = "";
    private $database = "blog_db";
    private $conexao;

    function __construct() {
        $this->conexao = new PDO("mysql:host=127.0.0.1; dbname=$this->database", $this->username, $this->senha);
    }

    function getConexao() {
        return $this->conexao;
    }
}

?>