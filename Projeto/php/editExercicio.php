<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
        <script type="text/javascript" href="../js/bootstrap.min.js"></script>
	    <link rel="stylesheet" href="../css/bootstrap.min.css">
		</head>
    <body>
        <div class="row" id="exercicio">
            <div class="col-md-8">
                <div class="minititulo">
                    <h3>Exercício</h3>
                </div>
                <form class="cadastro" action="../php/insert.php" method="POST">
                    <div class="textoForm">
                        <h5 class="textoInline">Enunciado:</h5>
                    </div>
                    <textarea rows="6" cols="50" class="campo" form="cadastro" name="enunciado"></textarea>
                    <br>
                    <div class="textoForm">
                        <h5 class="textoInline">a)</h5>
                    </div><input type="text" class="campo" name="a">
                    <br>
                    <div class="textoForm">
                        <h5 class="textoInline">b)</h5>
                    </div><input type="text" class="campo" name="b">
                    <br>
                    <div class="textoForm">
                        <h5 class="textoInline">c)</h5>
                    </div><input type="text" class="campo" name="c">
                    <br>
                    <div class="textoForm">
                        <h5 class="textoInline">d)</h5>
                    </div><input type="text" class="campo" name="d">
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-2">
                <input type="submit" name="criar_exercicio" value="Criar" class="botao">
            </div>
                </form>
        </div>
    </body>
</html>