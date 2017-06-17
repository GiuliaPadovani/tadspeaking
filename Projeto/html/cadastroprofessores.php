<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script type="text/javascript" href="../js/bootstrap.min.js"></script>
  <title>Cadatro de professores</title>
</head>
<body>
  <?php include "menu.php";?>
  <div class="container-fluid formularioLogin">
    <div class="row">
    <div class="col-md-2"></div>
      <div class="col-md-8 biggerBox">
          <div class="row">
            <div class="subtitulo">
              <h2>Cadastrar Professores</h2>
                <p class="textoInline">_______________</p><i class="fa fa-user" aria-hidden="true"></i><p class="textoInline">_______________</p>
              <!--a tag para fazer esse risco é a <hr>-->
            </div>
          </div>
          <div class="row cadastroProfessores">
              <form action="../php/insert.php" method="post">
                <div class="form-group">
                  <label for="nome">Nome</label>
                  <input type="text" class="campo campoLogin" id="nome" name="nome">
                </div>
                <div class="form-group">
                  <label for="usuario">Usuario</label>
                  <input type="text" class="campo campoLogin" id="user" name="user">
                </div>
                <div class="form-group">
                  <label for="instituicao">Instituição</label>
                  <input type="text" name="instituicao" id="curso" class="campo campoLogin">
                  <!--<select name="curso" id="curso" class="campo campoLogin" >
                  <option id="tads">UFPR</option>-->
                  </select><br>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="campo campoLogin" id="email"  name="email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Senha</label>
                  <input type="password" class="campo campoLogin" id="senha"  name="senha">
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" name="adm" value="1"> Administrador</label>
                </div>
                <button type="submit" class="botao" value="cadastrar" name="cadastrar">Cadastrar</button>
            </div>
            </form>
          </div>
    </div>
  </div>
</body>
</html>