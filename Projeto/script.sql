CREATE DATABASE tadspeaking;

CREATE TABLE Professores (
	nome VARCHAR(20),
	usuario VARCHAR(20),
	senha VARCHAR(20),
	registro VARCHAR(20) PRIMARY KEY AUTO_INCREMENT,
	dataRegistro VARCHAR(50),
	administrador Boolean,
	dataCriacao VARCHAR(20),
	instituicao VARCHAR(50),
	email VARCHAR(255)
)

