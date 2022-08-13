<?php
require_once 'models/UsuarioDAO.php';
require_once 'models/UsuarioModel.php';

class UsuarioController {
    private $usuarioDAO;

    public function __construct() {
        $DAO = new UsuarioDAO();
        $this->usuarioDAO = $DAO;
    }
    
    public function cadastrar() {
        $usuario = new Usuario($_REQUEST['nome'], $_REQUEST['cpf'], $_REQUEST['senha'], $_REQUEST['email'], $_REQUEST['data_nasc']);    
        return $this->usuarioDAO->insert($usuario);
    }

    public function login() {
        $isLogged = $this->usuarioDAO->login($_REQUEST['email'], $_REQUEST['senha']);
        if ($isLogged) {
            require_once 'views/PubView.php';
        } 
    }
}

?>