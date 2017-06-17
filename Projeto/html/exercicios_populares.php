<!DOCTYPE html>
<html>

<head>
	<title>TadSpeaking - Populares</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/font-awesome.min.css"><!-- icones fofos -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript" href="../js/bootstrap.min.js"></script>
	<script>
		function myFunction() {
			var x = document.createElement('i');
			x.className = "fa fa-times";
			x.setAttribute("aria-hidden", "true");
			document.getElementById("a").appendChild(x);
		}
	</script>
</head>

<body>
	<?php include "menu.php";?>
	<div class="container-fluid populares">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8 biggerBox">
				<div class="row">
					<div class="col-md-12 center">
						<div class="subtitulo">
							<h2>Exercícios Populares</h2>
							<p class="textoInline">_______________</p><i class="fa fa-book book" aria-hidden="true"></i>
							<p class="textoInline">_______________</p>
						</div>
					</div>
				</div>
				<div class="mostraExercicios">
					<div class="row">
						<div class="col-md-12 ex">
							<h4>1.Os comparativos de superioridade de "good" e "far" podem ser, respectivamente:</h4>
							<p class="textoInline" id="a"></p>
							<p onclick="myFunction()" class="textoInline choice">a)</p>
							<p class="textoInline"> Gooder, farer</p><br>
							<p class="textoInline" id="a"></p>
							<p onclick="myFunction()" class="textoInline choice">b)</p>
							<p class="textoInline"> Gooder, farther</p><br>
							<p class="textoInline" id="a"></p>
							<p onclick="myFunction()" class="textoInline choice">c)</p>
							<p class="textoInline"> Better, farer</p><br>
							<p class="textoInline" id="a"></p>
							<p onclick="myFunction()" class="textoInline choice">d)</p>
							<p class="textoInline"> Better, farther</p><br>
							<div class="col-md-4 author">
								<p><i>By Giulia Padovani.</i></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 options">
								<span class="like"><i class="fa fa-thumbs-o-up icon like" aria-hidden="true"></i></span>
								<span class="dislike"><i class="fa fa-thumbs-o-down icon" aria-hidden="true"></i></span>
								<span class="add"><i class="fa fa-plus icon" aria-hidden="true"></i></span>
								<div class="col-md-4 info">
								<i></i>
								</div>
							</div>
						</div>
						<!--
						<div class="col-md-2 info">
							<i class="fa fa-check acertos" aria-hidden="true"><p class="textoInline">85</p></i>
							<i class="fa fa-times erros" aria-hidden="true"><p class="textoInline">45</p></i>
						</div>-->
					</div>
					<div class="row">
						<div class="col-md-8 ex">
							<h4>2.Os comparativos de superioridade de "good" e "far" podem ser, respectivamente:</h4>
							<p class="textoInline" id="a"></p>
							<p onclick="myFunction()" class="textoInline choice">a)</p>
							<p class="textoInline"> Gooder, farer</p><br>
							<p class="textoInline" id="a"></p>
							<p onclick="myFunction()" class="textoInline choice">b)</p>
							<p class="textoInline"> Gooder, farther</p><br>
							<p class="textoInline" id="a"></p>
							<p onclick="myFunction()" class="textoInline choice">c)</p>
							<p class="textoInline"> Better, farer</p><br>
							<p class="textoInline" id="a"></p>
							<p onclick="myFunction()" class="textoInline choice">d)</p>
							<p class="textoInline"> Better, farther</p>
							<div class="col-md-4 author">
								<p><i>By Carolina Fernandes.</i></p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 ex">
							<h4>3.Os comparativos de superioridade de "good" e "far" podem ser, respectivamente:</h4>
							<p class="textoInline" id="a"></p>
							<p onclick="myFunction()" class="textoInline choice">a)</p>
							<p class="textoInline"> Gooder, farer</p><br>
							<p class="textoInline" id="a"></p>
							<p onclick="myFunction()" class="textoInline choice">b)</p>
							<p class="textoInline"> Gooder, farther</p><br>
							<p class="textoInline" id="a"></p>
							<p onclick="myFunction()" class="textoInline choice">c)</p>
							<p class="textoInline"> Better, farer</p><br>
							<p class="textoInline" id="a"></p>
							<p onclick="myFunction()" class="textoInline choice">d)</p>
							<p class="textoInline"> Better, farther</p>
							<div class="col-md-4 author">
								<p><i>By Jorge Madson.</i></p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 ex">
							<h4>4.Os comparativos de superioridade de "good" e "far" podem ser, respectivamente:</h4>
							<p class="textoInline" id="a"></p>
							<p onclick="myFunction()" class="textoInline choice">a)</p>
							<p class="textoInline"> Gooder, farer</p><br>
							<p class="textoInline" id="a"></p>
							<p onclick="myFunction()" class="textoInline choice">b)</p>
							<p class="textoInline"> Gooder, farther</p><br>
							<p class="textoInline" id="a"></p>
							<p onclick="myFunction()" class="textoInline choice">c)</p>
							<p class="textoInline"> Better, farer</p><br>
							<p class="textoInline" id="a"></p>
							<p onclick="myFunction()" class="textoInline choice">d)</p>
							<p class="textoInline"> Better, farther</p>
							<div class="col-md-4 author">
								<p><i>By Milena Araújo.</i></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>