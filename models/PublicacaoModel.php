<?php
  require_once 'UsuarioModel.php';

class Publicacao {
    private $titulo;
    private $conteudo;
    private $user_id;
    private $dataPublicacao;
    private $palavrasChave;
    private $image;

    function __construct($titulo, $conteudo, $user_id, $dataPublicacao, $palavrasChave, $image) {
      $this->titulo = $titulo;
      $this->conteudo = $conteudo;
      $this->user_id = $user_id;
      $this->dataPublicacao = $dataPublicacao;
      $this->palavrasChave = $palavrasChave;
      $this->image = $image;
    }

    public function getTitulo() {
      return $this->titulo;
    }

    public function getConteudo() {
      return $this->conteudo;
    }

    public function getUserId() {
      return $this->user_id;
    }

    public function getDataPublicacao() {
      return $this->dataPublicacao;
    }

    public function getPalavrasChave() {
      return $this->palavrasChave;
    }

    public function getImage() {
      return $this->image;
    }
}

?>