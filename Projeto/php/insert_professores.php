<?php
inclu
de 'sanitize.php'; //checa o que o usuario mandou, tira espaços

if ($_SERVER['REQUEST_METHOD']=="POST"){
	if(isset($_POST['cadastrar'])){
		$nome=sanitize($_POST['nome']);
		$email=sanitize($_POST['email']);
		$usuario=sanitize($_POST['usuario']);
		$nome=sanitize($_POST['nome']);
		
	}
}

?>