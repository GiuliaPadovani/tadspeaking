<?php
	require_once "lib/credentials.php";
	require_once "lib/connection.php";
	require_once "authenticate.php";

	/*----------------- Faz selects dos cursos/disciplinas e assuntos para a hora do cadastro -------------------*/

	//busca as instancias da tabela Curso
	$sql = "SELECT nome FROM Curso;";

	$cursos = mysqli_query($conn, $sql);
	
	if (!$cursos) {
	  die('Problemas no select.');
	}

	//busca as instancias da tabela Disciplina
	$sql = "SELECT nome_disciplina FROM Disciplina;";

	$disciplinas = mysqli_query($conn, $sql);
	
	if (!$disciplinas) {
	  die('Problemas no select.');
	}

	//busca as instancias da tabela Assunto
	$sql = "SELECT nome_assunto FROM Assunto;";

	$assuntos = mysqli_query($conn, $sql);
	
	if (!$assuntos) {
	  die('Problemas no select.');
	}
?>