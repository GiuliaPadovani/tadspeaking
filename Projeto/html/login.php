<?php
	/*-----------------Realiza o Login ------------------*/
	require_once "../php/lib/credentials.php";
	require_once "../php/lib/connection.php";
	require "../php/authenticate.php";

	$error = false;
	$senha = $user = "";


	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (isset($_POST["usuario"]) && isset($_POST["senha"])) {
	    $user = mysqli_real_escape_string($conn,$_POST["usuario"]);
	    $senha = mysqli_real_escape_string($conn,$_POST["senha"]);
	    $senha = md5($senha);

	    $sql = "SELECT * FROM Professor
	            WHERE usuario = '$user';";

	    $result = mysqli_query($conn, $sql);

	    if($result){
	      if (mysqli_num_rows($result) > 0) {
	        $user = mysqli_fetch_assoc($result);

	        if ($user["senha"] == $senha) {
	          $_SESSION["username"] = $user["usuario"];
	          $_SESSION["user_id"] = $user["registro"];
	          $_SESSION["name"] = $user["nome"];

	          header("Location: " . "../html/home.php");
	          exit();
	        }
	        else {
	          $error_msg = "Senha incorreta!";
	          $error = true;
	        }
	      }
	      else{
	        $error_msg = "Usuário não encontrado!";
	        $error = true;
	      }
	    }
	    else {
	      $error_msg = mysqli_error($conn);
	      $error = true;
	    }
	  }
	  else {
	    $error_msg = "Por favor, preencha todos os dados.";
	    $error = true;
	  }
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>TadSpeaking - Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/font-awesome.min.css"><!-- icones fofos -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" href="../js/bootstrap.min.js"></script>
</head>
<body>
		<div class="container-fluid formularioLogin">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="box margin12">
							<div class="row">
								<div class="col-md-12">
									<div class="subtitulo">
										<h2>Professor, Log-In!</h2>
										<p class="textoInline">_______________</p><i class="fa fa-book book" aria-hidden="true"></i><p class="textoInline">_______________</p>
									</div>
									<!--<?php if ($error): ?>
									  <h3 style="color:red;"><?php echo $error_msg; ?></h3>
									<?php endif; ?>-->
									<form class="login" action="login.php" method="POST">
										<p>Usuário</p>
										<input type="text" name="usuario" class="campo campoLogin">
										<p>Senha</p>
										<input type="password" name="senha" class="campo campoLogin">
										<br>
										<input type="checkbox" name="lembrar-me"> Lembrar minha senha.
										<br>
										<a href="#">Esqueci minha senha.</a>
										<br>
										<input type="submit" name="botao" value="Login" class="botao">
									</form>
								</div>
							</div>

							<!-- Trigger the modal with a button -->
							<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#mod">Open Modal</button>

							<!-- Modal -->
							<div id="mod" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Modal Header</h4>
							      </div>
							      <div class="modal-body">
							        <p>Some text in the modal.</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
					</div>
				</div>
			</div>
		</div>
</body>
</html>