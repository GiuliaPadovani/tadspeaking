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
$sql = "CREATE TABLE Professor (
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
CREATE TABLE Questao (
idQuestao INTEGER AUTO_INCREMENT PRIMARY KEY,
acertos INTEGER,
erros INTEGER,
enunciado VARCHAR(255),
resposta INTEGER,
alter_a VARCHAR(255),
alter_b VARCHAR(255),
alter_c VARCHAR(255),
alter_d VARCHAR(255),
FOREIGN KEY(registro) REFERENCES Professor (registro)
);
CREATE TABLE Assunto (
nome VARCHAR(255) PRIMARY KEY,
qntdProvas INTEGER,
qntdQuestoes INTEGER,
)";

if (mysqli_query($conn, $sql)) {
    echo "<br>Database created successfully";
} else {
    echo "<br>Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);

?>
