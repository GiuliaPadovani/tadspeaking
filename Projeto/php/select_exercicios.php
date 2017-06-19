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
	global $conn;
	$output='<table class="table table-striped">';
	$output.="<tr>";
	$output.="<th>#</th>";
	$output.="<th>Questão</th>";
	$output.="<th>Assunto</th>";
	$output.="<th>Qnt Acertos</th>";
	$output.="<th>Qnt Erro</th>";
	$output.="<th>Qnt Likes</th>";
	$output.="<th>Qnt Dislikes</th>";
	$output.="<th>Data de criação</th>";
	$output.="<th>Add</th>";	
	$output.="</tr>";
	echo $output;
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
	global $conn; 

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
	global $conn;
	$busca=$_POST["ex_buscado"];
	
	$sql = "SELECT * FROM Questao WHERE enunciado LIKE '% ".$busca." %';";

	$dados = mysqli_query($conn, $sql);

	if (!$dados) {
	  die('Problemas no select.');
	}else {
		return $dados;		
	}
}

function selectCursos()
{
	global $conn; 

	$sql = "SELECT * FROM Curso;";

	$dados = mysqli_query($conn, $sql);

	if (!$dados) {
	  die('Problemas no select.');
	}else {
		return $dados;		
	}	
}


function exibeTabelaCursos($dados){
	global $conn;
	$output='<table class="table table-striped">';
	$output.="<tr>";
	$output.="<th>#</th>";
	$output.="<th>Curso</th>";
	$output.="</tr>";
	echo $output;
	$cont=0;
	if(mysqli_num_rows($dados) > 0){
		while ($dado = mysqli_fetch_assoc($dados)){
			$cont++;
			$output="<tr>";
			$output.="<th>".$cont."</th>";
			$output.="<td><form class='textoInline' action='../html/disciplinas.php' method='post'><button type='submit' class='editar' name='curso' value='".$dado['id_curso']."'>".$dado['nome']."</button></form></td>";
			$output.="</tr>";
			echo $output;
		}
	}	
	echo "</table>";
}

function selectDisciplinas() {
	global $conn;

	$sql = "SELECT * FROM Disciplina;";

	$disciplinas = mysqli_query($conn, $sql);
	
	if (!$disciplinas) {
	  die('Problemas no select.');
	}else {
		return $disciplinas;
	}
}

function exibeTabelaDisciplinas($dados){
	global $conn;
	$output='<table class="table table-striped">';
	$output.="<tr>";
	$output.="<th>#</th>";
	$output.="<th>Disciplina</th>";
	$output.="</tr>";
	echo $output;
	$cont=0;
	if(mysqli_num_rows($dados) > 0){
		while ($dado = mysqli_fetch_assoc($dados)){
			$cont++;
			$output="<tr>";
			$output.="<th>".$cont."</th>";
			$output.="<td><form class='textoInline' action='../html/assuntos.php' method='post'><button type='submit' class='editar' name='assunto' value='".$dado['id_disciplina']."'>".$dado['nome_disciplina']."</button></form></td>";
			$output.="</tr>";
			echo $output;
		}
	}	
	echo "</table>";
}

function exibeTabelaAssuntos($dados){
	global $conn;
	$output='<table class="table table-striped">';
	$output.="<tr>";
	$output.="<th>#</th>";
	$output.="<th>Assunto</th>";
	$output.="<th>Disciplina</th>";
	$output.="</tr>";
	echo $output;
	$cont=0;
	if(mysqli_num_rows($dados) > 0){
		while ($dado = mysqli_fetch_assoc($dados)){
			$cont++;
			$output="<tr>";
			$output.="<th>".$cont."</th>";
			$output.="<td><form class='textoInline' action='../html/exercicios_assunto.php' method='post'><button type='submit' class='editar' name='assunto' value='".$dado['id_assunto']."'>".$dado['nome_assunto']."</button></form></td>";
			
			$sql="SELECT nome_disciplina FROM Disciplina WHERE id_disciplina='".$dado['id_disciplina']."';";
			
			$disciplinas = mysqli_query($conn, $sql);
			
			if (!$disciplinas) {
			  die('Problemas no select.');
			}else{
				if (mysqli_num_rows($disciplinas) > 0) {
				  $disciplina = mysqli_fetch_assoc($disciplinas);
				  $nome_disciplina = $disciplina["nome_disciplina"];
				}
			}
			$output.="<td>'$nome_disciplina'</td>";
			$output.="</tr>";
			echo $output;
		}
	}	
	echo "</table>";
}


function selectAssuntos($id_disciplina)
{
	global $conn; 

	$sql = "SELECT * FROM Assunto WHERE id_disciplina='$id_disciplina';";

	$dados = mysqli_query($conn, $sql);

	if (!$dados) {
	  die('Problemas no select.');
	}else {
		return $dados;		
	}
}

function selectExercicioAssunto($id_assunto)
{
	global $conn; 

	$sql = "SELECT * FROM Questao WHERE id_assunto='$id_assunto';";

	$dados = mysqli_query($conn, $sql);

	if (!$dados) {
	  die('Problemas no select.');
	}else {
		return $dados;		
	}	
}

?>
