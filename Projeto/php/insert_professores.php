<?php
	//-------------------------Faz cadastro dos Professores-------------------------

	include 'lib/sanitize.php'; 
	require_once "lib/credentials.php";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	if ($_SERVER['REQUEST_METHOD']=="POST"){
		if(isset($_POST['cadastrar'])){
			$nome=sanitize($_POST["nome"]);
			$user=sanitize($_POST["user"]);
			$instituicao=sanitize($_POST["instituicao"]);
			$email=sanitize($_POST["email"]);
			$senha=sanitize($_POST["senha"]);
			$adm=sanitize($_POST["adm"]);
			$data_registro=date("Y-m-d H:i:s");
			$email=sanitize($_POST["emai"]);

			$sql = "INSERT INTO Professor (nome, usuario, senha, registro, dataRegistro, administrador, instituicao, email)
					VALUES ('$nome', '$user', '$senha', '', '$data_registro', '$adm', '$instituicao', '$email')";
			
			$status = mysqli_query($conn, $sql);

			if($status){
				$link = "../html/cadastroprofessores.php";
				header('Location:'.$link);
			}

			if (!$status) {
			  die('Problemas para inserir no BD!');
			}
		}
	}

?>