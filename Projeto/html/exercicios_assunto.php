<?php
	include "menu.php";
	include "../php/select_exercicios.php";
	require_once "../php/lib/credentials.php";
	require_once "../php/lib/connection.php";

	if ($_SERVER['REQUEST_METHOD']=="POST"){
	    if(isset($_POST['assunto'])){
	        $id_assunto=$_POST['assunto'];
	        $sql = "SELECT nome_assunto FROM Assunto WHERE id_assunto='$id_assunto';";

	        $dados = mysqli_query($conn, $sql);

	        if (!$dados) {
	          die('Problemas no select.');
	        }else {
	        	if (mysqli_num_rows($dados) > 0) {
	        	  $dado = mysqli_fetch_assoc($dados);
	        	  $nome = $dado["nome_assunto"];
	        	}		
	        }	
	    }
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>TadSpeaking - Exercicios</title>
	<meta charset="utf-8">
  	<link rel="stylesheet" href="../css/font-awsesome.min.css"><!-- icones fofos -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript" href="../js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid meus">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8 biggerBox">
				<div class="row">
					<div class="col-md-12 center">
						<div class="subtitulo">
							<h2><?php echo $nome ?></h2>
							<p class="textoInline">_______________</p><i class="fa fa-book book" aria-hidden="true"></i><p class="textoInline">_______________</p>
						</div>
					</div>
				</div>
				<div class="mostraExercicios">
					<div class="row">
						
							<?php
								exibeExercicios(selectExercicioAssunto($id_assunto));
							?>
						
						<!--
						<div class="col-md-2 info">
							<i class="fa fa-check acertos" aria-hidden="true"><p class="textoInline">85</p></i>
							<i class="fa fa-times erros" aria-hidden="true"><p class="textoInline">45</p></i>
						</div>-->
					</div>
				<div class="row">
					<div class="col-md-8"></div>
					<div class="col-md-4">
						<a href="cadastrar.php"><input type="submit" name="botao" value="Criar novo" class="botao botaoVerde"></a>
					</div>
				</div>
			</div>			
		</div>			
	</div>
</body>
</html>