<!DOCTYPE html>
<html>
<head>
	<title>TadSpeaking - Meus Exercícios</title>
	<meta charset="utf-8">
	<script src="https://use.fontawesome.com/a67d3afb0f.js"></script> <!-- icones fofos -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript" href="../js/bootstrap.min.js"></script>
</head>
<body>
	<?php include "menu.php";?>
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
						<div class="col-md-12 ex">
							<?php
								include "../php/select_exercicios.php";
							?>
						</div>
						<div class="row">
							<div class="col-md-12 options">
								<span class="like"><i class="fa fa-thumbs-o-up icon like" aria-hidden="true"></i></span>
								<span class="dislike"><i class="fa fa-thumbs-o-down icon" aria-hidden="true"></i></span>
								<span class="add"><i class="fa fa-plus icon" aria-hidden="true"></i></span>
								<span class="edit"><i class="fa fa-edit icon"></i></span>
								<div class="col-md-4 info">
								<i></i>
								</div>
							</div>
						</div>
						<!--
						<div class="col-md-2 info">
							<i class="fa fa-check acertos" aria-hidden="true"><p class="textoInline">85</p></i>
							<i class="fa fa-times erros" aria-hidden="true"><p class="textoInline">45</p></i>
						</div>-->
					</div>
				<div class="row">
					<div class="col-md-8"></div>
					<div class="col-md-4">
						<input type="submit" name="botao" value="Criar novo" class="botao">
					</div>
				</div>
			</div>			
		</div>			
	</div>
</body>
</html>