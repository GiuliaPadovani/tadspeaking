CREATE DATABASE tadspeaking;

CREATE TABLE Professores (
	nome VARCHAR(20),
	usuario VARCHAR(20),
	senha VARCHAR(20),
	email VARCHAR(255),
	registro VARCHAR(20) PRIMARY KEY,
	dataRegistro VARCHAR(50),
	administrador Boolean,
	dataCriacao VARCHAR(20),
	instituicao VARCHAR(50)
)