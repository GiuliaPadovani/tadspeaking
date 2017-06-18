<?php require "../php/select_exercicios.php" ?>
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
	<?php include "menu.php";?>
	<div class="container-fluid populares">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8 biggerBox">
				<div class="row">
					<div class="col-md-12 center">
						<div class="subtitulo">
							<h2>Criar Prova</h2>
							<p class="textoInline">_______________</p><i class="fa fa-book book" aria-hidden="true"></i>
							<p class="textoInline">_______________</p>
						</div>
					</div>
				</div>
				//Formulario com
				//nome da lista
				//
				<?php $resultado = selectTodosExercicios();
					exibirTabelaComTodosExercicios($resultado);
				?>
				<div class="row">
					<button class="pull-right botao">Adicionar questão</button>
				</div>
				<div class="row" style="margin-top:0.5em">
					<button class="pull-right botao">Gerar prova</button>
				</div>
			</div>
		</div>
	</div>
	</div>
</body>

</html>