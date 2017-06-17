<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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