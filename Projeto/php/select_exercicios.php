<?php
require_once "lib/credentials.php";
require_once "lib/connection.php";
require_once "authenticate.php";

/*----------------------------Exibe exercícios-------------------------------------*/
function exibeExercicios($dados)
{
    global $user_id, $conn;
    if ($dados==NULL) {
    	echo "<h4>Não existem exercícios para serem exibidos.</h4>";
    }else{
	    if (mysqli_num_rows($dados) > 0) {
	        $i = 1;
	        while ($dado = mysqli_fetch_assoc($dados)) {
	        	$output="<div class='col-md-12 ex'>";
	            $output.="<h4>".$i.".".$dado['enunciado']."</h4>";
	            $output.="<p class='textoInline choice'>a)</p><p class='textoInline'>".$dado['alter_a']."</p><br>";
	            $output.="<p class='textoInline choice'>b)</p><p class='textoInline'>".$dado['alter_b']."</p><br>";
	            $output.="<p class='textoInline choice'>c)</p><p class='textoInline'>".$dado['alter_c']."</p><br>";
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
									<a href='../html/criar_prova.php'><span class='add'><i class='fa fa-plus icon' aria-hidden='true'></i></span></a>";
				if ($dado['registro']==$user_id) {
					$output.="<form class='botao_edicao' action='../html/editExercicio.php' method='post'><button type='submit' class='editar' name='editar' value='".$dado['id_questao']."'><i class='fa fa-edit icon' aria-hidden='true'></i></button></form>";
				}

				$output.="</div>
							</div>";
				
				echo $output;          
	            $i++;
	        }
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
	echo "<th>Add</th>";	
	echo "</tr>";
	$cont=0;
	if(mysqli_num_rows($dados) > 0){
		while ($dado = mysqli_fetch_assoc($dados)){
			$cont++;
			//Select para pegar o nome do assunto
			$sql="select nome_assunto from Assunto where id_assunto=".$dado['id_assunto'];
			$assunto=mysqli_query($conn,$sql);
			$assunto=mysqli_fetch_assoc($assunto);
			if(!$assunto){
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
			$output.="<td><input type='checkbox' name='adicionar".$cont."' value='.".$dado['id_questao']."'></td>";
			$output.="</tr>";
			echo $output;
		}
	}	
	echo "</table>";		
}

function selectExerciciosRecentes()
{
	global $user_id, $conn; 

	$sql = "SELECT * FROM Questao ORDER BY data DESC LIMIT 5;";

	$dados = mysqli_query($conn, $sql);

	if (!$dados) {
	  die('Problemas no select.');
	}else {
		return $dados;		
	}
}

function busca()
{
	global $user_id, $conn;
	$busca=$_POST["ex_buscado"];
	
	$sql = "SELECT * FROM Questao WHERE enunciado LIKE '% ".$busca." %';";

	$dados = mysqli_query($conn, $sql);

	if (!$dados) {
	  die('Problemas no select.');
	}else {
		return $dados;		
	}
}



?>
