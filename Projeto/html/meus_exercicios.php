<?php
	include "../php/select_exercicios.php";
	include "menu.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>TadSpeaking - Meus Exercícios</title>
	<meta charset="utf-8">

  	<link rel="stylesheet" href="../css/font-awesome.min.css"><!-- icones fofos -->
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
							<h2>Meus exercícios</h2>
							<p class="textoInline">_______________</p><i class="fa fa-book book" aria-hidden="true"></i><p class="textoInline">_______________</p>
						</div>
					</div>
				</div>
				<div class="mostraExercicios">
					<div class="row">
						
							<?php
								exibeExercicios(selectMeusExercicios());
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