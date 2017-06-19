<?php

require_once "../php/lib/credentials.php";
require_once "../php/lib/connection.php";
require_once "../php/select_cadastro.php";

if ($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['editar'])){
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
                    $id_assunto=$dado['id_assunto'];
                    
                    $sql = "SELECT nome_assunto FROM Assunto WHERE id_assunto='".$id_assunto."';";

                    $ret = mysqli_query($conn, $sql);

                    if (!$ret) {
                        die("Problemas no select");
                    }else{
                        if(mysqli_num_rows($ret) > 0){
                            $vetor=mysqli_fetch_assoc($ret);
                            $nome_assunto=$vetor['nome_assunto'];
                        }
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
        <meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <?php include "../html/menu.php"; ?>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 biggerBox">
                    <div class="row">
                        <div class="col-md-12 center">
                            <div class="subtitulo">
                                <h2>Editar exercício</h2>
                                <p class="textoInline">_______________</p><i class="fa fa-book book" aria-hidden="true"></i><p class="textoInline">_______________</p>
                            </div>
                        </div>
                    </div>
                    <div class="minititulo">
                        <h3>Exercício</h3>
                    </div>
                    <form class="cadastro" action="../php/update.php" method="POST">
                        <div class="textoForm">
                            <h5 class="textoInline">Enunciado:</h5>
                        </div>
                        <textarea rows="6" cols="50" class="campo" name="enunciado"><?php echo $enunciado;?></textarea>
                        <br>
                        <div class="textoForm">
                            <h5 class="textoInline">a)</h5>
                        </div>
                        <input type="text" class="campo" name="a" value="<?php echo $a;?>">
                        <label><input type="checkbox" name="resposta" value="a"></label>
                        <br>
                        <div class="textoForm">
                            <h5 class="textoInline">b)</h5>
                        </div>
                        <input type="text" class="campo" name="b" value="<?php echo $b;?>">
                        <label><input type="checkbox" name="resposta" value="b"></label>
                        <br>
                        <div class="textoForm">
                            <h5 class="textoInline">c)</h5>
                        </div>
                        <input type="text" class="campo" name="c" value="<?php echo $c;?>">
                        <label><input type="checkbox" name="resposta" value="c"></label>
                        <br>
                        <div class="textoForm">
                            <h5 class="textoInline">d)</h5>
                        </div>
                        <input type="text" class="campo" name="d" value="<?php echo $d;?>">
                        <label><input type="checkbox" name="resposta" value="d"></label>
                        <br>
                        <div class="textoForm">
                            <h5 class="textoInline">Assunto:</h5>
                        </div>
                        <select class="campo" name="assunto">
                            <?php
                                if(mysqli_num_rows($assuntos) > 0){
                                    echo "<option value=".$nome_assunto.">".$nome_assunto."</option>";
                                    while ($assunto = mysqli_fetch_assoc($assuntos)){
                                        $output="<option value=".$assunto['nome_assunto'].">".$assunto['nome_assunto']."</option>";
                                        echo $output;
                                    }
                                }else {
                                    echo "<option>Nada a mostrar</option>";
                                }
                            ?>
                        </select>
                        <button type="submit" name="editar_exercicio" value="<?php echo $id?>" class="botao salvar botaoVerde">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
