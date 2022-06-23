<?php
session_start();
if(!isset($_SESSION["user-login"])){
  header("Location: signIn.php");
  die();
}else{
  echo $_GET["foto"];
  echo $_GET["content"];
}
?>