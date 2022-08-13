<?php
  require_once '../models/PublicacaoDAO.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
  <h1>Lista de Publicacao</h1>
  <?php
    $publicacaoDAO = new PublicacaoDAO();
    $publis = $publicacaoDAO->fetchAll();

    // print_r($publis);

    foreach ($publis as $key => $value) {
      ?>
      <div>
        <h2>
          <?php echo $value['titulo'] ?>
        </h2>
        <p>
          <?php echo $value['conteudo'] ?>
        </p>
        <p>
          <?php echo $value['data_publicacao'] ?>
        </p>
        <p>
          <?php echo $value['palavras_chave'] ?>
        </p>
        <img src="<?php echo $value['img'] ?>"/>
    </div>
    <?php
    }
    ?>
</body>
</html>