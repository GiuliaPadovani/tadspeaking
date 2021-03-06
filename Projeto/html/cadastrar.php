<?php
	include "../php/select_cadastro.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>TadSpeaking - Cadastrar</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../css/font-awesome.min.css"> <!-- icones fofos -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<script type="text/javascript" href="../js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php include "menu.php";?>
		<div class="container-fluid cadastrar">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8 biggerBox">
					<div class="row">
						<div class="col-md-12 center">
							<div class="subtitulo">
								<h2>Cadastrar</h2>
								<p class="textoInline">_______________</p><i class="fa fa-book book" aria-hidden="true"></i><p class="textoInline">_______________</p>
							</div>
							<a href="#curso">Curso</a>
							<h5 class="textoInline">|</h5>
							<a href="#disciplina">Disciplina</a>
							<h5 class="textoInline">|</h5>
							<a href="#assunto">Assunto</a>
							<h5 class="textoInline">|</h5>
							<a href="#exercicio">Exercício</a>
						</div>
					</div>
					<div class="row" id="curso">
						<div class="col-md-8">
							<div class="minititulo">
								<h3>Curso</h3>
							</div>
							<form class="cadastro" action="../php/insert.php" method="POST">
								<div class="textoForm">
									<h5 class="textoInline">Nome:</h5>
								</div><input type="text" class="campo" name="curso">
						</div>
							<div class="col-md-2"></div>
							<div class="col-md-2">
								<input type="submit" name="criar_curso" value="Criar" class="botao">
							</div>
							</form>
					</div>
					<hr>
					<div class="row" id="disciplina">
						<div class="col-md-8">
							<div class="minititulo">
								<h3>Disciplina</h3>
							</div>
							<form class="cadastro" action="../php/insert.php" method="POST">
								<div class="textoForm">
									<h5 class="textoInline">Nome:</h5>
								</div><input type="text" class="campo" name="disciplina">
								<br>
								<div class="textoForm">
									<h5 class="textoInline">Curso:</h5>
								</div>
								<select class="campo" name="select_curso">
									<?php
										if(mysqli_num_rows($cursos) > 0){
											while ($curso = mysqli_fetch_assoc($cursos)){
												$output="<option value=".$curso['nome'].">".$curso['nome']."</option>";
												echo $output;
											}
										}else {
											echo "<option>Nada a mostrar</option>";
										}
									?>
								</select>
						</div>
						<div class="col-md-2"></div>
						<div class="col-md-2">
							<input type="submit" name="criar_disciplina" value="Criar" class="botao">
						</div>
							</form>
					</div>
					<hr>
					<div class="row" id="assunto">
						<div class="col-md-8">
							<div class="minititulo">
								<h3>Assunto</h3>
							</div>
							<form class="cadastro" action="../php/insert.php" method="POST">
								<div class="textoForm">
									<h5 class="textoInline">Nome:</h5>
								</div><input type="text" class="campo" name="assunto">
								<br>
								<div class="textoForm">
									<h5 class="textoInline">Disciplina:</h5>
								</div>
								<select class="campo" name="disciplina">
									<?php
										if(mysqli_num_rows($disciplinas) > 0){
											while ($disciplina = mysqli_fetch_assoc($disciplinas)){
												$output="<option value=".$disciplina['nome_disciplina'].">".$disciplina['nome_disciplina']."</option>";
												echo $output;
											}
										}else {
											echo "<option>Nada a mostrar</option>";
										}
									?>
								</select>
						</div>
						<div class="col-md-2"></div>
						<div class="col-md-2">
							<input type="submit" name="criar_assunto" value="Criar" class="botao">
						</div>
							</form>
					</div>
					<hr>
					<div class="row" id="exercicio">
						<div class="col-md-8">
							<div class="minititulo">
								<h3>Exercício</h3>
							</div>
							<form class="cadastro" action="../php/insert.php" method="POST">
								<div class="textoForm">
									<h5 class="textoInline">Enunciado:</h5>
								</div>
								<textarea rows="6" cols="50" class="campo" name="enunciado"></textarea>
								<br>
								<div class="textoForm">
									<h5 class="textoInline">a)</h5>
								</div>
								<input type="text" class="campo" name="a">
								<label><input type="checkbox" name="resposta" value="a"></label>
								<br>
								<div class="textoForm">
									<h5 class="textoInline">b)</h5>
								</div>
								<input type="text" class="campo" name="b">
								<label><input type="checkbox" name="resposta" value="b"></label>
								<br>
								<div class="textoForm">
									<h5 class="textoInline">c)</h5>
								</div>
								<input type="text" class="campo" name="c">
								<label><input type="checkbox" name="resposta" value="c"></label>
								<br>
								<div class="textoForm">
									<h5 class="textoInline">d)</h5>
								</div>
								<input type="text" class="campo" name="d">
								<label><input type="checkbox" name="resposta" value="d"></label>
								<div class="textoForm">
									<h5 class="textoInline">Assunto:</h5>
								</div>
								<select class="campo" name="assunto">
									<?php
										if(mysqli_num_rows($assuntos) > 0){
											while ($assunto = mysqli_fetch_assoc($assuntos)){
												$output="<option value=".$assunto['nome_assunto'].">".$assunto['nome_assunto']."</option>";
												echo $output;
											}
										}else {
											echo "<option>Nada a mostrar</option>";
										}
									?>
								</select>
						</div>
						<div class="col-md-2"></div>
						<div class="col-md-2">
							<input type="submit" name="criar_exercicio" value="Criar" class="botao">
						</div>
					</form>
					</div>
					<hr>					
				</div>
			</div>
		</div>
	</body>
</html>