<?php
	require_once "lib/credentials.php";
	require_once "lib/connection.php";
	require_once "authenticate.php";

	/*----------------------------Exibe exercícios-------------------------------------*/
	function exibeExercicios($dados)
	{
		global $conn, $user_id;

		if(mysqli_num_rows($dados) > 0){
			$i=1;
			while ($dado = mysqli_fetch_assoc($dados)){
				$enunciado="<h4>".$i.".".$dado['enunciado']."</h4>";
				echo $enunciado;
				$a="<p class='textoInline choice'>a)</p><p class='textoInline'>".$dado['alter_a']."</p><br>";
				echo $a;
				$b="<p class='textoInline choice'>b)</p><p class='textoInline'>".$dado['alter_b']."</p><br>";
				echo $b;
				$c="<p class='textoInline choice'>c)</p><p class='textoInline'>".$dado['alter_c']."</p><br>";
				echo $c;
				$d="<p class='textoInline choice'>d)</p><p class='textoInline'>".$dado['alter_d']."</p><br>";
				echo $d;

				$sql = "SELECT nome FROM Professor WHERE registro='".$dado['registro']."';";
				$ret = mysqli_query($conn, $sql);

				if (!$ret) {
				  die('Problemas no select.');
				}else {
					if(mysqli_num_rows($ret) > 0){
						$x = mysqli_fetch_assoc($ret);
						$nome_autor = $x["nome"];
					}
				}

				$autor="<div class='col-md-4 author'><p><i>By ".$nome_autor."</i></p></div>";
				echo $autor;

				$i++;					
			}
		}
	}


	/*----------------------------Faz select dos exercícios---------------------------*/

	function selectMeusExercicios()
	{
		global $user_id, $conn;

		$sql = "SELECT * FROM Questao where registro='$user_id';";

		$dados = mysqli_query($conn, $sql);

		if (!$dados) {
		  die('Problemas no select.');
		}else {
			return $dados;		
		}
	}

	function selectTodosExercicios()
	{
		global $user_id, $conn;

		$sql = "SELECT * FROM Questao;";

		$dados = mysqli_query($conn, $sql);

		if (!$dados) {
		  die('Problemas no select.');
		}else {
			return $dados;		
		}	
	}

	function selectExerciciosRecentes(){
		global $user_id, $conn; 

		$sql = "SELECT * FROM Questao ORDER BY data DESC LIMIT 5;";

		$dados = mysqli_query($conn, $sql);

		if (!$dados) {
		  die('Problemas no select.');
		}else {
			return $dados;		
		}
	}

?>

