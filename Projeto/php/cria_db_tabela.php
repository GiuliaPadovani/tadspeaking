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
  usuario VARCHAR(255),
  senha VARCHAR(255),
  email VARCHAR(255),
  registro INTEGER PRIMARY KEY AUTO_INCREMENT,
  dataRegistro VARCHAR(255),
  administrador Boolean,
  instituicao VARCHAR(255)
)";

if (mysqli_query($conn, $sql)) {
    echo "<br>Database created successfully";
} else {
    echo "<br>Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);

?>
