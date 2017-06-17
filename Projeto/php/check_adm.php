<?php
	/*-----------Procurar cadastro adm no banco-------------*/
	require_once "lib/credentials.php";
	require_once "lib/connection.php";
	require_once "authenticate.php";

	//busca o atributo adm
	$sql = "SELECT administrador FROM Professor WHERE registro='$user_id';";

	$status = mysqli_query($conn, $sql);
	
	if (!$status) {
	  die('Problemas no select.');
	}else {
		if (mysqli_num_rows($status) > 0) {
		  $dados = mysqli_fetch_assoc($status);
		  $adm = $dados["administrador"];
		  $link = "../html/home.php";
		  header('Location:'.$link);
		  }
	}
?>