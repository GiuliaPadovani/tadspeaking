<?php
require_once "lib/credentials.php";
require_once "lib/connection.php";
require_once "authenticate.php";

/*----------------------------Exibe exercícios-------------------------------------*/

/*-------Exemplo de uso do exibirTabelaComTodosExercicios();-----------------------*/
//$resultado = selectTodosExercicios();
//exibirTabelaComTodosExercicios($resultado);

function exibeExercicios($dados)
{
    global $user_id, $conn;
    if (mysqli_num_rows($dados) > 0) {
        $i = 1;
        while ($dado = mysqli_fetch_assoc($dados)) {
            $enunciado = "<h4>" . $i . "." . $dado['enunciado'] . "</h4>";
            echo $enunciado;
            $a = "<p class='textoInline choice'>a)</p><p class='textoInline'>" . $dado['alter_a'] . "</p><br>";
            echo $a;
            $b = "<p class='textoInline choice'>b)</p><p class='textoInline'>" . $dado['alter_b'] . "</p><br>";
            echo $b;
            $c = "<p class='textoInline choice'>c)</p><p class='textoInline'>" . $dado['alter_c'] . "</p><br>";
            echo $c;
            $d = "<p class='textoInline choice'>d)</p><p class='textoInline'>" . $dado['alter_d'] . "</p><br>";
            echo $d;
            
            $sql = "SELECT nome FROM Professor WHERE registro='" . $dado['registro'] . "';";
            $ret = mysqli_query($conn, $sql);
            
            if (!$ret) {
                die('Problemas no select.');
            } else {
                if (mysqli_num_rows($ret) > 0) {
                    $x          = mysqli_fetch_assoc($ret);
                    $nome_autor = $x["nome"];
                }
            }
            
            $autor = "<div class='col-md-4 author'><p><i>By " . $nome_autor . "</i></p></div>";
            echo $autor;
            
            $i++;
        }
    }
}


/*----------------------------Faz select dos exercícios---------------------------*/

function selectMeusExercicios()
{
    global $user_id, $conn;
    
    $sql = "SELECT * FROM Questao where registro='$user_id';";
    
    $dados = mysqli_query($conn, $sql);
    
    if (!$dados) {
        die('Problemas no select.');
    } else {
        exibeExercicios($dados);
    }
}

function selectTodosExercicios(){
	global $user_id,$conn;

	$sql = "select * from Questao;";

	$dados= mysqli_query($conn,$sql);

	if(!$dados){
		die('Problema no select.');
	}else{
		return $dados;
	}
}

/*----------------------------cria tabela html com os dados---------------------------*/

function exibirTabelaComTodosExercicios($dados)
{
global $conn,$sql;
echo '<table class="table table-striped">';
							echo "<tr>";
							echo "<th>#</th>";
							echo "<th>Questão</th>";
							echo "<th>Assunto</th>";
							echo "<th>Qnt Acertos</th>";
							echo "<th>Qnt Erro</th>";
							echo "<th>Qnt Likes</th>";
							echo "<th>Qnt Dislikes</th>";
							echo "<th>Data de criação</th>";	
							echo "</tr>";
							$cont=0;
							if(mysqli_num_rows($dados) > 0)
							{

								while ($dado = mysqli_fetch_assoc($dados))
								{
									$cont++;
									//Select para pegar o nome do assunto
									$sql="select nome_assunto from Assunto where id_assunto=".$dado['id_assunto'];
									$assunto=mysqli_query($conn,$sql);
									$assunto=mysqli_fetch_assoc($assunto);
									if(!$assunto)
									{
										die('Problema select nome do assunto.');
									}
									$output="<tr>";
									$output.="<th>".$cont."</th>";
									$output.="<td>".$dado['enunciado']."</td>";
									$output.="<td>".$assunto['nome_assunto']."</td>";
									$output.="<td>".$dado['acertos']."</td>";
									$output.="<td>".$dado['erros']."</td>";
									$output.="<td>".$dado['likes']."</td>";
									$output.="<td>".$dado['dislikes']."</td>";
									$output.="<td>".$dado['data']."</td>";
									$output.="</tr>";
									echo $output;
								}
							}	
						echo "</table>";
}

	function selectExerciciosRecentes(){
		global $user_id, $conn; 

		$sql = "SELECT * FROM Questao ORDER BY data DESC LIMIT 5;";

		$dados = mysqli_query($conn, $sql);

		if (!$dados) {
		  die('Problemas no select.');
		}else {
			return $dados;		
		}
	}

?>

