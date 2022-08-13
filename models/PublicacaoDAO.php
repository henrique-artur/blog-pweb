<?php
  require_once 'IDAO.php';
  require_once 'Database.php';
  
  class PublicacaoDAO implements IDAO {
    private $conexao;

    function __construct() {
        $Database = new Database();
        $this->conexao = $Database->getConexao();
    }

    public function insert($model) {
      $stmt = $this->conexao->prepare(
        "INSERT INTO publicacao (titulo, conteudo, user_id, data_publicacao, palavras_chave, img) VALUES (?, ?, ?, ?, ?, ?)"
      );
      // $stmt->bindValue(':titulo', );
      // $stmt->bindValue(':conteudo', $model->getConteudo());
      // $stmt->bindValue(':user_id', $model->getUser());
      // $stmt->bindValue(':data_publicacao', $model->getDataPublicacao());
      // $stmt->bindValue(':palavras_chave', $model->getPalavrasChave());
      // $stmt->bindValue(':img', $model->getImage());
      return $stmt->execute(array(
        $model->getTitulo(), 
        $model->getConteudo(),
        $model->getUserId(),
        $model->getDataPublicacao(),
        $model->getPalavrasChave(),
        $model->getImage()
      ));
    }

    public function delete($id) {}

    public function __delete($id, $user_id) {
      $stmt = $this->conexao->prepare("DELETE FROM publicacao WHERE ID = :id AND user_id = :user_id");
      $stmt->bindValue(':id', $id);
      $stmt->bindValue(':user_id', $user_id);
      return $stmt->execute();
    }

    public function getById($id) {
      $stmt = $this->conexao->prepare("SELECT * FROM publicacao WHERE ID = :id");
      $stmt->bindValue(':id', $id);
      return $stmt->execute();
    }

    public function fetchAll() {
      $stmt = $this->conexao->query("SELECT * FROM usuarios INNER JOIN publicacao ON publicacao.user_id = usuarios.id");
      $stmt->execute();
      return $stmt->fetchAll();
    }
    
    public function update($id, $model) {
      $stmt = $this->conexao->prepare(
        "UPDATE publicacao SET titulo = :titulo, conteudo = :conteudo, data_publicacao = :data_pulicacao, palavras_chave = :palavras_chave, img = :img WHERE ID = :id"
      );
      $stmt->bindValue(':titulo', $model->getTitulo());
      $stmt->bindValue(':conteudo', $model->getConteudo());
      $stmt->bindValue(':data_publicacao', $model->getDataPublicacao());
      $stmt->bindValue(':palavras_chave', $model->getPalavrasChave());
      $stmt->bindValue(':img', $model->getImage());
      $stmt->bindValue(':id', $id);
      return $stmt->execute();
    }
  }

?>