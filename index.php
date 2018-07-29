<?php
session_start();
if (isset($_GET['out'])) {
 session_destroy();
 header('location:index.php');
} else if (isset($_SESSION['idUsuarioLogado'])){
  // require_once("views/home.php");
   header("location:views/home.php?pag=home");
 }else {
   require_once("views/login.php");
 }
//  require_once("views/home.php");
?>
