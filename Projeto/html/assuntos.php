<?php 
	require "../php/select_exercicios.php";
	include "menu.php";
	if ($_SERVER['REQUEST_METHOD']=="POST"){
	    if(isset($_POST['assunto'])){
	        $id_disciplina=$_POST['assunto'];
	    }
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>TadSpeaking - Assuntos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript" href="../js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid populares">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8 biggerBox">
				<div class="row">
					<div class="col-md-12 center">
						<div class="subtitulo">
							<h2>Assuntos</h2>
							<p class="textoInline">_______________</p><i class="fa fa-book book" aria-hidden="true"></i><p class="textoInline">_______________</p>
						</div>
					</div>
				</div>
				<div>
					  <?php 
					  	exibeTabelaAssuntos(selectAssuntos($id_disciplina));
					  ?>
				</div>
				<div class="row">
				<a href="cadastrar.php#assunto"><button class="pull-right botao">Criar novo assunto</button></a>
				</div>
				</div>
			</div>			
		</div>			
	</div>
</body>
</html>