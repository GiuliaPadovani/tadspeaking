<?php
	include 'lib/sanitize.php'; 
	require_once "lib/credentials.php";
	require_once "lib/connection.php";
	require_once "authenticate.php";
	/*--------------------------------------Faz update dos exercícios-------------------------------*/

	if ($_SERVER['REQUEST_METHOD']=="POST"){
		if(isset($_POST['editar_exercicio'])){
			$enunciado=sanitize($_POST["enunciado"]);
			$a=sanitize($_POST["a"]);
			$b=sanitize($_POST["b"]);
			$c=sanitize($_POST["c"]);
			$d=sanitize($_POST["d"]);
			$resposta=$_POST["resposta"];
			$assunto=$_POST["assunto"];
			$data=date("Y-m-d H:i:s");
			$id_questao=$_POST['editar_exercicio'];
			//busca o id_disciplina para relacionar
			$sql = "SELECT id_assunto FROM Assunto WHERE nome_assunto='$assunto';";

			$status = mysqli_query($conn, $sql);
			
			if (!$status) {
			  die('Problemas no insert.');
			}else {
				if (mysqli_num_rows($status) > 0) {
				  $dados = mysqli_fetch_assoc($status);
				  $id_assunto = $dados["id_assunto"];
				}
			}
			//
			$sql = "UPDATE Questao SET enunciado='$enunciado', resposta='$resposta', alter_a='$a', alter_b='$b', alter_c='$c', alter_d='$d', id_assunto='$id_assunto', data='$data' WHERE id_questao='$id_questao';";

			$status = mysqli_query($conn, $sql);

			if($status){
				
					$link = "../html/meus_exercicios.php";
					header('Location:'.$link);
				
			}

			if (!$status) {
			  die('Problemas para inserir no BD!');
			}
		}
	}

?>