<?php
	include "../php/select_exercicios.php";
	require_once "../php/lib/credentials.php";
	require_once "../php/lib/connection.php";
	require_once "../php/authenticate.php";

//------------recebe resposta da questao--------------
	if ($_SERVER['REQUEST_METHOD']=="POST"){
		if(isset($_POST['enviar_resposta'])){
			$id_questao=$_POST['id_questao'];
			$resp_usuario=$_POST['resp'];
			echo $id_questao;
			echo '<br>';
			echo $resp_usuario;
//----------fazendo select para verificar se está correto-----
			$sql = "SELECT id_questao,resposta FROM Questao where id_questao='$id_questao';";
		    $dados = mysqli_query($conn, $sql);
		    if (!$dados) 
		    {
		        die('Problemas no select.');
		    }else
		    {
		    	$dados_do_banco=mysqli_fetch_assoc($dados);
		    
		    	if($dados_do_banco>0)
		    	{
		    		
		    		if ($id_questao == $dados_do_banco['id_questao'])
		    		{
		    			if($resp_usuario==$dados_do_banco['resposta'])
		    			{
		    				echo "<script> alert('Voce acertou');</script>";
		    			}
		    			else
		    			{
		    				echo "<script> alert('Voce errou');</script>";
		    			}
		    		}
		    	}

		    }	
}
}
?>
<!DOCTYPE>
<html>
<head> 
    <title>TadSpeaking - Lista de Exercicio</title>
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
							<h2>Lista de Exercício</h2>
							<p class="textoInline">_______________</p><i class="fa fa-book book" aria-hidden="true"></i><p class="textoInline">_______________</p>
						</div>
					</div>
				</div>
				<div class="mostraExercicios">
					<div class="row">
					<!--verificaRespostas.php-->
					<form action="lista.php" method="POST">
						<div class="col-md-12 ex">
							<?php
								exibeExerciciosLista(selectTodosExercicios());					
							?>
					</div>
				<div class="row">
					<div class="col-md-8"></div>
					<div class="col-md-4">
						<input type="submit" name="enviar_resposta" value="Enviar" class="botao botaoVerde">
					</div>
					</form>
				</div>
			</div>			
		</div>			
	</div>
</body>
</html>
