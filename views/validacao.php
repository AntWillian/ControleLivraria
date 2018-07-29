<?php
//  session_destroy();
session_start();
 if (isset($_SESSION['idUsuarioLogado'])){
  // require_once("views/home.php");
  // header("location:home.php?pag=home");
 }else {
  // require_once("../index.php");
   header("location:../index.php");
 }
//  require_once("views/home.php");
?>
