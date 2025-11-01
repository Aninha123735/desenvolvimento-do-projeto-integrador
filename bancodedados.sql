CREATE DATABASE empresa CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE empresa;

CREATE TABLE funcionarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  cpf CHAR(11) NOT NULL UNIQUE,
  senha_hash VARCHAR(255) NOT NULL,
  criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE patrimonio(
  numero_patrimonio VARCHAR(50) PRIMARY KEY,
  ano INT NOT NULL,
  marca VARCHAR(100) NOT NULL,
  localizacao VARCHAR(100) NOT NULL,
  item VARCHAR(100) NOT NULL
);

insert into patrimonio(numero_patrimonio, ano, marca, localizacao, item)
VALUES("123456", 2007,"sansung", "sala 007", "computador");


ALTER TABLE funcionarios CHANGE senha_hash senhas VARCHAR(255) NOT NULL;

ALTER TABLE funcionarios CHANGE senha_hash senha VARCHAR(255) NOT NULL;


SELECT * FROM patrimonio;