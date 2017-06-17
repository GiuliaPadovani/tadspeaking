<?php
	//-------------------------Faz cadastro dos cursos, disciplinas, assuntos, -------------------------

	include 'lib/sanitize.php'; 
	require_once "lib/credentials.php";
	require_once "lib/connection.php";

	/*---------------------------cadastrar professores-----------------------------*/
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
			  die('Problemas para inserir no BD!');
			}
		}
	}

	/*-------------------------------------cadastrar Cursos-------------------------------------*/
	if ($_SERVER['REQUEST_METHOD']=="POST"){
		if(isset($_POST['criar_curso'])){
			$nome=sanitize($_POST["curso"]);
			$sql = "INSERT INTO Curso (nome, id_curso)
					VALUES ('$nome', '');";
			
			$status = mysqli_query($conn, $sql);

			if($status){
				$link = "../html/cadastrar.php";
				header('Location:'.$link);
				$status=1;
			}

			if (!$status) {
			  die('Problemas para inserir no BD!');
			}
		}
	}

	/*------------------------------cadastrar disciplina-------------------------------------------*/
	if ($_SERVER['REQUEST_METHOD']=="POST"){
		if(isset($_POST['criar_disciplina'])){
			
			$nome=sanitize($_POST["disciplina"]);
			$curso=$_POST["select_curso"];
			echo $nome.$curso;
			$sql = "INSERT INTO Disciplina (nome_disciplina, id_disciplina)
					VALUES ('$nome', '');";

			$status = mysqli_query($conn, $sql);

			if (!$status) {
			  die('Problemas para inserir no BD!');
			}

			//busca o id_curso e id_disciplina para relacionar
			$sql = "SELECT id_disciplina FROM Disciplina WHERE nome_disciplina='$nome';";

			$status = mysqli_query($conn, $sql);

			if (!$status) {
			  die('Problemas para inserir no BD!');
			}else {
				if (mysqli_num_rows($result) > 0) {
				  $dados = mysqli_fetch_assoc($status);
				  $id_disciplina = $dados["id_disciplina"];
				 }
			}

			$sql = "SELECT id_curso FROM Curso WHERE nome = '$curso';";	

			$status = mysqli_query($conn, $sql);

			if (!$status) {
			  die('Problemas para inserir no BD!');
			}else {
				if (mysqli_num_rows($result) > 0) {
				  $dados = mysqli_fetch_assoc($status);
				  $id_curso = $dados["id_curso"];
				 }
			}		

			$sql = "INSERT INTO curso_disciplina (id_disciplina, id_curso)
					VALUES ('$id_disciplina', '$id_curso');";

			$status = mysqli_query($conn, $sql);

			if($status){
				$link = "../html/cadastrar.php";
				header('Location:'.$link);
				$status=1;
			}

			if (!$status) {
			  die('Problemas para inserir no BD!');
			}
		}
	}

	/*---------------------------------cadastrar assuntos--------------------------------*/
	if ($_SERVER['REQUEST_METHOD']=="POST"){
		if(isset($_POST['criar_assunto'])){
			$nome=sanitize($_POST["nome"]);
			$disciplina=$_POST["disciplina"];

			//busca o id_disciplina para relacionar
			$sql = "SELECT id_disciplina FROM Disciplina WHERE nome_disciplina='$disciplina';";

			$status = mysqli_query($conn, $sql);

			if (!$status) {
			  die('Problemas para inserir no BD!');
			}else {
				if (mysqli_num_rows($result) > 0) {
				  $dados = mysqli_fetch_assoc($status);
				  $id_disciplina = $dados["id_disciplina"];
				 }
			}

			$sql = "INSERT INTO Assunto (nome_assunto, id_assunto, qntdQuestoes, id_disciplina)
					VALUES ('$nome', '', '', '$id_disciplina');";
			
			$status = mysqli_query($conn, $sql);

			if($status){
				$link = "../html/cadastrar.php";
				header('Location:'.$link);
				$status=1;
			}

			if (!$status) {
			  die('Problemas para inserir no BD!');
			}
		}
	}

?>