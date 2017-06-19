<?php
	require_once "../php/lib/credentials.php";
	require_once "../php/lib/connection.php";
	require_once "../php/authenticate.php";
?>
<!DOCTYPE>
<html>
<head> 
    <title>TadSpeaking - Lista de Exercicio</title>
	<meta charset="utf-8">
	<script src="https://use.fontawesome.com/a67d3afb0f.js"></script> <!-- icones fofos -->
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
						<div class="col-md-12 ex">
							<?php
								global $user_id, $conn;
function exibeExercicios($dados)

{
    if ($dados==NULL) {

    	echo "<h4>Não existem exercícios para serem exibidos.</h4>";

    }else{

	    if (mysqli_num_rows($dados) > 0) {

	        $i = 1;

	        while ($dado = mysqli_fetch_assoc($dados)) {

	        	$output="<div class='col-md-12 ex'>";

	            $output.="<h4>".$i.".".$dado['enunciado']."</h4>";
			$output.="<label><input type='checkbox' name='resposta' value='a'></label>";
	            $output.="<p class='textoInline choice'>a)</p><p class='textoInline'>".$dado['alter_a']."</p><br>";
			$output.="<label><input type='checkbox' name='resposta' value='b'></label>";
	            $output.="<p class='textoInline choice'>b)</p><p class='textoInline'>".$dado['alter_b']."</p><br>";
			$output.="<label><input type='checkbox' name='resposta' value='c'></label>";
	            $output.="<p class='textoInline choice'>c)</p><p class='textoInline'>".$dado['alter_c']."</p><br>";
			$output.="<label><input type='checkbox' name='resposta' value='d'></label>";
	            $output.="<p class='textoInline choice'>d)</p><p class='textoInline'>".$dado['alter_d']."</p><br>";

	            

	            $sql = "SELECT nome FROM Professor WHERE registro='".$dado['registro']."';";

	            

	            $ret = mysqli_query($conn, $sql);

	            

	            if (!$ret) {

	                die('Problemas no select.');

	            } else {

	                if (mysqli_num_rows($ret) > 0) {

	                    $x = mysqli_fetch_assoc($ret);

	                    $nome_autor = $x["nome"];

	                }

	          }

	            $output.="<div class='col-md-4 author'><p><i>By ".$nome_autor."</i></p></div>";

	            $output.="</div>

							<div class='row'>

								<div class='col-md-12 options'>

									<span class='like'><i class='fa fa-thumbs-o-up icon like' aria-hidden='true'></i></span>

									<span class='dislike'><i class='fa fa-thumbs-o-down icon' aria-hidden='true'></i></span>

								</div>

							</div>";

				echo $output;

	            

	            $i++;

	        }

	    }

	}
}

exibeExercicios("Select * from Questao;");
							?>
					</div>
				<div class="row">
					<div class="col-md-8"></div>
					<div class="col-md-4"></div>
				</div>
			</div>			
		</div>			
	</div>
</body>
</html>
