<?php
// INCLUA O CODIGO DE CONEXAO AQUI 

// Utilize a seguinte funçao para redirecionamento:
// header();
// Documentaçao: http://php.net/manual/en/function.header.php

// IMPLEMENTE O CODIGO DE INSERÇAO NA TABELA AQUI

require 'connection.php';
include 'sanitize.php';

$table="Pessoas";

if ($_SERVER['REQUEST_METHOD']=="POST"){
	if(isset($_POST['botao'])){
		$nome=sanitize($_POST["nome"]);
		$sobrenome=sanitize($_POST["sobrenome"]);
		$sexo=sanitize($_POST["sexo"]);
		$idade=sanitize($_POST["idade"]);
		$data=sanitize($_POST["data"]);
		$email=sanitize($_POST["email"]);
		$site=sanitize($_POST["site"]);

		$sql = "INSERT INTO Pessoas (nome, sobrenome, sexo, idade, nascimento, email, website)
				VALUES ('$nome', '$sobrenome', '$sexo', '$idade', '$data', '$email', '$site')";
		
		$erro = mysqli_query($conn, $sql);

		if($erro){
			$link = "../../index.php";
			header('Location:'.$link);
		}

		if (!$erro) {
		  die('Problemas para inserir no BD!');
		}
	}
}



?>

