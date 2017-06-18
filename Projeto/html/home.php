<?php
	require_once "../php/authenticate.php";
	require_once "../php/check_adm.php"; 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<?php include "menu.php" ?>
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
