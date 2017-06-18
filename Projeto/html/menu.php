<?php
  require "../php/authenticate.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="shortcut icon" href="../images/favicon.ico" />
 <link rel="icon" href="../images/favicon.ico" type="image/x-icon" />
 <link rel="icon" type="image/x-icon" href="../images/favicon.ico" />

  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="../js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" href="../js/bootstrap.min.js"></script>
  <title>Cadatro de professores</title>
</head>
<body>
    <header>
    <nav class = "navbar navbar-default menu" role = "navigation">
       <div class = "navbar-header">
          <button type = "button" class = "navbar-toggle"
             data-toggle = "collapse" data-target = "#navbar-collapse">
             <span class = "sr-only">Toggle navigation</span>
             <span class = "icon-bar"></span>
             <span class = "icon-bar"></span>
             <span class = "icon-bar"></span>
          </button>
          <a href="../html/login.php"> <span class="logo">
            <img class="tads" src="../images/tads2.png">
          </span></a>
       </div>
       <div class = "collapse navbar-collapse" id = "navbar-collapse">
          <ul class = "nav navbar-nav navbar-right navegar">
            <li><a href="#">
              <?php
                if ($login) {
                  echo "Olá, $name!";
                }
              ?>
            </a></li>
            <li><a href="home.php">Home</a></li>
            <li><a href="exercicios_populares.php">Exercícios Populares</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown" data-toggle="dropdown-menu" role="button" aria-haspopup="true" aria-expanded="false">Cursos <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">TADS</a></li>
                    <li><a href="#">TCI</a></li>
                </ul>
            </li>
            <li><a href="../php/logout.php">LogOut</a></li>
          </ul>
       </div>
    </nav>
  </header>
</body>
</html>