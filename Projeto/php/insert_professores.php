<?php
	//-------------------------Faz cadastro dos Professores-------------------------

	include 'lib/sanitize.php'; 
	require_once "lib/credentials.php";
	require_once "lib/connection.php";

	if ($_SERVER['REQUEST_METHOD']=="POST"){
		if(isset($_POST['cadastrar'])){
			$nome=sanitize($_POST["nome"]);
			$user=sanitize($_POST["user"]);
			$instituicao=sanitize($_POST["instituicao"]);
			$senha=sanitize($_POST["senha"]);
			$senha=md5($senha);
			$adm=sanitize($_POST["adm"]);
			$data_registro=date("Y-m-d H:i:s");
			$email=sanitize($_POST["email"]);

			$sql = "INSERT INTO Professor (nome, usuario, senha, email, registro, dataRegistro, administrador, instituicao)
					VALUES ('$nome', '$user', '$senha', '$email', '', '$data_registro', '$adm', '$instituicao');";
			
			$status = mysqli_query($conn, $sql);

			if($status){
				$link = "../html/cadastroprofessores.php";
				header('Location:'.$link);
				$status=1;
			}

			if (!$status) {
			  die('Problemas para inserir no BD!'.mysqli_error($conn));
			}
		}
	}

?>