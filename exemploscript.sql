CREATE DATABASE id10783031_loja DEFAULT CHARACTER SET utf8;
USE id10783031_loja;

CREATE TABLE produto (
    nome          VARCHAR(255) NOT NULL,
    quantidade    INT NOT NULL,
    preco         VARCHAR(255) NOT NULL,
PRIMARY KEY (nome))