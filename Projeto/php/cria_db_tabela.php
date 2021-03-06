<?php
require 'lib/credentials.php';
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}

// Create database
$sql = "CREATE DATABASE $dbname;";

mysqli_query($sql);

if (mysqli_query($conn, $sql)) {
    echo "<br>Database created successfully<br>";
} else {
    echo "<br>Error creating database: " . mysql_error($conn);
}

// Choose database
$sql = "USE $dbname;";
if (mysqli_query($conn, $sql)) {
    echo "<br>Database changed";
} else {
    echo "<br>Error changing database: " . mysql_error($conn);
}

// sqlto create table
$sql = "CREATE TABLE Professor (
    nome VARCHAR(255),
    usuario VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255),
    email VARCHAR(255),
    registro INTEGER AUTO_INCREMENT PRIMARY KEY,
    dataRegistro DATETIME,
    administrador Boolean,
    instituicao VARCHAR(255)
  );";

if (mysqli_query($conn, $sql)) {
    echo "<br>Table created successfully<br>";
} else {
    echo "<br>Error creating Professor table: " . mysql_error($conn);
}

$sql = " CREATE TABLE Curso (
    nome VARCHAR(255),
    id_curso INTEGER PRIMARY KEY AUTO_INCREMENT
  );";

if (mysqli_query($conn, $sql)) {
    echo "<br>Table created successfully<br>";
} else {
    echo "<br>Error creating Curso database: " . mysql_error($conn);
}

$sql = "CREATE TABLE Disciplina (
    nome_disciplina VARCHAR(255),
    id_disciplina INTEGER PRIMARY KEY AUTO_INCREMENT
  );";

if (mysqli_query($conn, $sql)) {
    echo "<br>Table created successfully<br>";
} else {
    echo "<br>Error creating Disciplina database: " . mysql_error($conn);
}

$sql = "CREATE TABLE curso_disciplina (
    id_disciplina INTEGER,
    id_curso INTEGER,
    FOREIGN KEY (id_curso) REFERENCES Curso(id_curso),
    FOREIGN KEY (id_disciplina) REFERENCES Disciplina(id_disciplina),
    CONSTRAINT id_curso_disciplina primary key(id_curso, id_disciplina)     
  );";

if (mysqli_query($conn, $sql)) {
    echo "<br>Table created successfully<br>";
} else {
    echo "<br>Error creating curso_disciplina database: " . mysql_error($conn);
}

$sql = "CREATE TABLE Assunto (
    nome_assunto VARCHAR(255), 
    id_assunto INTEGER PRIMARY KEY AUTO_INCREMENT,
    qntdQuestoes INTEGER,
    id_disciplina INTEGER,
    FOREIGN KEY (id_disciplina) REFERENCES Disciplina (id_disciplina)
  );";

if (mysqli_query($conn, $sql)) {
    echo "<br>Table created successfully<br>";
} else {
    echo "<br>Error: creating Assunto database: " . mysql_error($conn);
}

$sql = "CREATE TABLE Questao (
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
    likes INTEGER,
    dislikes INTEGER,
    data DATETIME,
    FOREIGN KEY(registro) REFERENCES Professor (registro),
    FOREIGN KEY (id_assunto) REFERENCES Assunto (id_assunto)
  );";


if (mysqli_query($conn, $sql)) {
    echo "<br>Table created successfully hell yeah";
} else {
    echo "<br>Error: creating Questao database: " . mysql_error($conn);
}

$sql = "CREATE TABLE Lista (
    nome_lista VARCHAR(255),
    id_lista INTEGER PRIMARY KEY AUTO_INCREMENT,
    ex1 INTEGER,
    ex2 INTEGER,
    ex3 INTEGER,
    ex4 INTEGER,
    ex5 INTEGER,
    FOREIGN KEY (ex1) REFERENCES Questao (id_questao),
    FOREIGN KEY (ex2) REFERENCES Questao (id_questao),
    FOREIGN KEY (ex3) REFERENCES Questao (id_questao),
    FOREIGN KEY (ex4) REFERENCES Questao (id_questao),
    FOREIGN KEY (ex5) REFERENCES Questao (id_questao)
  );";

if (mysqli_query($conn, $sql)) {
    echo "<br>Table created successfully<br>";
} else {
    echo "<br>Error creating Disciplina database: " . mysql_error($conn);
}


mysqli_close($conn);

?>
