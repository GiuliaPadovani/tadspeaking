<?php include "menu.php" ?>
<?php
	require_once "../php/authenticate.php";
	require_once "../php/check_adm.php"; 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
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
					<a><div>
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
				<div class="row subtitulo center">
					<h2>Últimos Exercícios</h2>
				</div>
			</div>
			</div>
		</section>
	</body>
</html>
