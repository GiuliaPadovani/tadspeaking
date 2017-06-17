<?php
require 'lib/credentials.php';
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE $dbname";
if (mysqli_query($conn, $sql)) {
    echo "<br>Database created successfully<br>";
} else {
    echo "<br>Error creating database: " . mysqli_error($conn);
}

// Choose database
$sql = "USE $dbname";
if (mysqli_query($conn, $sql)) {
    echo "<br>Database changed";
} else {
    echo "<br>Error creating database: " . mysqli_error($conn);
}

// sql to create table
$sql = 
" 
  CREATE TABLE Professor (
    nome VARCHAR(255),
    usuario VARCHAR(20),
    senha VARCHAR(20),
    email VARCHAR(255),
    registro INTEGER AUTO_INCREMENT PRIMARY KEY,
    dataRegistro VARCHAR(50),
    administrador Boolean,
    dataCriacao VARCHAR(20),
    instituicao VARCHAR(50)
  );

  CREATE TABLE Curso (
    nome VARCHAR(255),
    id_curso INTEGER PRIMARY KEY AUTO_INCREMENT
  );

  CREATE TABLE Disciplina (
    nome_disciplina VARCHAR(255),
    id_disciplina INTEGER PRIMARY KEY AUTO_INCREMENT
  );

  CREATE TABLE curso_disciplina (
    id_disciplina INTEGER,
    id_curso INTEGER,
    FOREIGN KEY (id_curso) REFERENCES Curso(id_curso),
    FOREIGN KEY (id_disciplina) REFERENCES Disciplina(id_disciplina),
    CONSTRAINT id_curso_disciplina primary key(id_curso, id_disciplina)     
  );

  CREATE TABLE Assunto (
    nome_assunto VARCHAR(255), 
    id_assunto INTEGER PRIMARY KEY AUTO_INCREMENT,
    qntdQuestoes INTEGER,
    id_disciplina INTEGER,
    FOREIGN KEY (id_disciplina) REFERENCES Disciplina (id_disciplina)
  );

  CREATE TABLE Questao (
    id_questao INTEGER AUTO_INCREMENT PRIMARY KEY,
    acertos INTEGER,
    erros INTEGER,
    enunciado VARCHAR(255),
    resposta CHAR(1),
    alter_a VARCHAR(255),
    alter_b VARCHAR(255),
    alter_c VARCHAR(255),
    alter_d VARCHAR(255),
    registro INTEGER,
    id_assunto INTEGER,
    FOREIGN KEY(registro) REFERENCES Professor (registro),
    FOREIGN KEY (id_assunto) REFERENCES Assunto (id_assunto)
  );";

  echo $sql;

if (mysqli_query($conn, $sql)) {
    echo "<br>Database created successfully";
} else {
    echo "<br>Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);

?>
