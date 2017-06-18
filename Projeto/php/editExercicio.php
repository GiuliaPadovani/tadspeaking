<?php
	require_once "lib/credentials.php";
	require_once "lib/connection.php";
	require_once "authenticate.php";

$id=$_POST['editar'];

$sql = "SELECT * FROM Questao WHERE id_questao='".$id."';";

$dados = mysqli_query($conn, $sql);

if (!$dados) {
	die('Problemas no select.');
}else {
	if(mysqli_num_rows($dados) > 0){ 
		while ($dado = mysqli_fetch_assoc($dados)){
			$enunciado=$dado['enunciado'];
			$a=$dado['alter_a'];
			$b=$dado['alter_b'];
			$c=$dado['alter_c'];
			$d=$dado['alter_d'];

			
		}
	}
}
?>

<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <?php include "../html/menu.php"; ?>
        <div class="container">
            <div class="row" id="exercicio">
                <div class="col-md-2"></div>
                <div class="col-md-8 biggerBox">
                    <div class="minititulo">
                        <h3>Exercício</h3>
                    </div>
                    <form class="cadastro" action="../php/insert.php" method="POST">
                        <div class="textoForm">
                            <h5 class="textoInline">Enunciado:</h5>
                        </div>
                        <textarea rows="6" cols="50" class="campo" form="cadastro" name="enunciado" value='sakjdsjdjksad'></textarea>
                        <br>
                        <div class="textoForm">
                            <h5 class="textoInline">a)</h5>
                        </div><input type="text" class="campo" name="a" value="<? echo $dado['alter_a']; ?>">
                        <label><input type="checkbox" name="resposta" value="a"></label>
                        <br>
                        <div class="textoForm">
                            <h5 class="textoInline">b)</h5>
                        </div><input type="text" class="campo" name="b" value="<? echo $dado['alter_b']; ?>">
                        <label><input type="checkbox" name="resposta" value="b"></label>
                        <br>
                        <div class="textoForm">
                            <h5 class="textoInline">c)</h5>
                        </div><input type="text" class="campo" name="c" value="<? echo $dado['alter_c']; ?>">
                        <label><input type="checkbox" name="resposta" value="c"></label>
                        <br>
                        <div class="textoForm">
                            <h5 class="textoInline">d)</h5>
                        </div><input type="text" class="campo" name="d" value="<? echo $dado['alter_d']; ?>">
                        <label><input type="checkbox" name="resposta" value="d"></label>
                            <div class="textoForm">
                                <h5 class="textoInline">Assunto:</h5>
                            </div>
                            <select class="campo" name="assunto" value="<? echo $dado['assunto']; ?>">
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
                            <div class="col-md-2">
                                <input type="submit" name="criar_exercicio" value="Salvar" class="botao salvar">
                            </div>
                </div>
                <div class="col-md-2"></div>
                    </form>
            </div>
        </div>
    </body>
</html>
