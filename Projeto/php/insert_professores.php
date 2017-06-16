<?php

include 'lib/sanitize.php'; //checa o que o usuario mandou, tira espaços
require_once "lib/credentials.php";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$table='Professores';

if ($_SERVER["REQUEST_METHOD"]=="POST"){
	if(isset($_POST['cadastrar'])){
		$nome=$_POST['nome'];
		$email=sanitize($_POST['email']);
		$user=sanitize($_POST['user']);
		$instituicao=$_POST['instituicao'];
		$senha=sanitize($_POST['senha']);
		$adm=$_POST['adm'];
		$data_registro = date("Y-m-d H:i:s");

		$sql = "INSERT INTO $table (nome, usuario, senha, registro, dataRegistro, administrador, instituicao)
				VALUES ('$nome', '$usuario', '$senha', '$data_registro' ,'$adm', '$instituicao')";

		$erro=mysqli_query($conn, $sql);

		echo $erro;

		if (!$erro) {
			echo "Erro na inserção.";
		}
	}
}	

?>