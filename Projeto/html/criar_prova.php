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
				<div>
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Questão</th>
								<th>Tópico(Assunto)</th>
								<th>Tipo</th>
								<th>Confirmar</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Numbers have ...</td>
								<td>Presnt / Past</td>
								<td>Múltipla escolha</td>
								<td> <input type="checkbox" aria-label="Confirmar questão"></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>I guy go ...</td>
								<td>Verb to be</td>
								<td>Verdadeiro ou falso</td>
								<td> <input type="checkbox" aria-label="Confirmar questão"></td>

							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Somebody once told me ...</td>
								<td>Reading</td>
								<td>Música</td>
								<td> <input type="checkbox" aria-label="Confirmar questão"></td>

							</tr>
						</tbody>
					</table>
				</div>
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