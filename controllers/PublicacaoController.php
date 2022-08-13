<?php
  require_once 'models/PublicacaoDAO.php';
  require_once 'models/PublicacaoModel.php';

  class PublicacaoController {
    private $publicacaoDAO;

    public function __construct() {
      $DAO = new PublicacaoDAO();
      $this->publicacaoDAO = $DAO;
    }

    public function criarPublicacao() {
      $publicacao = new Publicacao($_REQUEST['title'], $_REQUEST['conteudo'], $_REQUEST['id'], $_REQUEST['data_publicacao'], $_REQUEST['palavras_chave'], $_REQUEST['img']);
      $foiPublicado = $this->publicacaoDAO->insert($publicacao);
      if ($foiPublicado) {
        require_once 'views/PubList.php';
      }
    }

    public function deletarPublicacao() {
      return $this->publicacaoDAO->__delete($_REQUEST['pub_id'], $_REQUEST['user_id']);
    }

    public function listarPublicacao() {
      return $this->publicacaoDAO->fetchAll();
    }

    public function editarPublicacao() {
      $publicacao = new Publicacao($_REQUEST['titulo'], $_REQUEST['conteudo'], $_REQUEST['id'], $_REQUEST['data_publicacao'], $_REQUEST['palavras_chave'], $_REQUEST['img']);
      return $this->publicacaoDAO->update($_REQUEST['pub_id'], $publicacao);
    }

    public function localizarPubPorID() {
      return $this->publicacaoDAO->getById($_REQUEST['pub_id']);
    }
  }
?>