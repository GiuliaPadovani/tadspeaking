<?php include "menu.php" ?>
<?php
	require_once "../php/authenticate.php";
	require_once "../php/check_adm.php"; 
	require "../php/select_exercicios.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
  		<title>TadSpeaking</title>
	</head>
	<body>
		<section class="container-fluid page-admin">
			<div class="row">
			<div class="col-md-3 previa-perfil">
				<div class="row">
					<div class="col-md-12">
						<div class="row profile-pic">
							<img src="../images/profile-pictures.png">
						</div>
					<div class="row nome-previa-perfil">
						<?php
						echo "<h3>$name</h3>"
						?>
					</div>
					<div class="row links-home">
					<a href="meus_exercicios.php">
					<div>
					<h4>Meus Exercícios</h4>
					</div></a>
					<a href="minhas_provas.php">
					<div>
						<h4>Minhas listas</h4>
					</div></a>
					<a href="cadastrar.php"><div>
						<h4>Cadastrar</h4>
					</div></a>
					<?php
						if ($adm==1) {
							echo "<a href='cadastroprofessores.php'><div><h4>Cadastrar Professores</h4></div></a>";
						}
					?>
				</div>
				<div class="icon-config">
					<a href=""><i class="fa fa-cog" aria-hidden="true"></i></a>
				</div>
			</div>
			</div>
			</div>
			<div class="col-md-9 ultimos-exercicios">
					<div class="row">
						<div class="col-md-12 center">
							<div class="subtitulo">
								<h2>Ultimos Exercícios</h2>
								<p class="textoInline">_______________</p><i class="fa fa-book book" aria-hidden="true"></i><p class="textoInline">_______________</p>
							</div>
						</div>
					</div>
					<div class="mostraExercicios">
						<div class="row">
							<div class="col-md-12 ex">
								<?php
									exibeExercicios(selectExerciciosRecentes());
								?>
							</div>
							<div class="row">
								<div class="col-md-12 options">
									<span class="like"><i class="fa fa-thumbs-o-up icon like" aria-hidden="true"></i></span>
									<span class="dislike"><i class="fa fa-thumbs-o-down icon" aria-hidden="true"></i></span>
									<span class="add"><i class="fa fa-plus icon" aria-hidden="true"></i></span>
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
		</section>
	</body>
</html>
