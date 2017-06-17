<?php
  session_start();

  if (isset($_SESSION["user_id"]) && isset($_SESSION["username"])){
    $login = true;
    $user_id = $_SESSION["user_id"];
    $user_name = $_SESSION["username"];
    $name=$_SESSION["name"];
  }
  else{
    $login = false;
  }

?>
