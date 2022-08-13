CREATE TABLE usuarios (
  ID INT UNSIGNED NOT NULL AUTO_INCREMENT,
  nome VARCHAR(40),
  cpf VARCHAR(25),
  email VARCHAR(30),
  senha VARCHAR(50),
  data_nasc DATE,
  PRIMARY KEY (ID)
);

CREATE TABLE publicacao (
  ID INT UNSIGNED NOT NULL AUTO_INCREMENT,
  user_id INT UNSIGNED NOT NULL,
  titulo VARCHAR(50),
  conteudo VARCHAR(200),
  data_publicacao DATE,
  palavras_chave VARCHAR(100),
  img BLOB,
  FOREIGN KEY (user_id) REFERENCES usuarios(ID),
  PRIMARY KEY (ID)
);

