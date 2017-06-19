<?php
require "../php/select_exercicios.php";

include "menu.php";

?>
<!DOCTYPE html>
<html>

<head>
	<title>TadSpeaking - Criar Prova</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/font-awesome.min.css"><!-- icones fofos -->
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
							<h2>Criar Lista</h2>
							<p class="textoInline">_______________</p><i class="fa fa-book book" aria-hidden="true"></i>
							<p class="textoInline">_______________</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<form class="cadastro" action="../php/insert.php" method="post">
							<div class="textoForm">
								<h5 class="textoInline">Nome:</h5>
								<input class="campo form-group" type="text" name="nome_assunto">
							</div>
						</form>
					</div>
				<?php
$resultado = selectTodosExercicios();
exibirTabelaComTodosExercicios($resultado);
?>
			<input type="submit" class="pull-right botaoSempadding" name="gerar_prova" value="Gerar prova">
			</div>
		</div>
	</div>
	</div>
</body>

</html>