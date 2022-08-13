<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h1>Cadastro de Publicacao</h1>

    <form action="../index.php?classe=Publicacao&acao=criarPublicacao" method="POST">
    Titulo: <input type="text" name="title" /><br>
    Conteúdo:  <textarea name="conteudo"></textarea><br>
    Id do Usuário: <input type="number" name="id"><br>
    Data de Publicacao: <input type="date" name="data_publicacao"><br>
    Palavras Chave: <input type="text" name="palavras_chave"><br>
    Imagem: <input type="file" name="img"><br>
    <input type="submit" >
    </form>
</body>
</html>