CREATE DATABASE tadspeaking;

CREATE TABLE Professor (
	nome VARCHAR(20),
	usuario VARCHAR(20),
	senha VARCHAR(20),
	registro INT PRIMARY KEY AUTO_INCREMENT,
	dataRegistro DATETIME,
	administrador Boolean,
	instituicao VARCHAR(50)
);

