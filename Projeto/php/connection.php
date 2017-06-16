<?php

// Carregamento dos dados
require "lib/credentials.php";

/*-------------------------------------------*/
/* 2. CHAMADA DE FUNÇOES                     */
/*-------------------------------------------*/

// Estabelecimento de conexao com o banco de dados
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Checagem de erros na conexao
if(mysqli_connect_error())
	die("Unable to connect to database! Error: " . mysqli_connect_error());