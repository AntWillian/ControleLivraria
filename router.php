<?php
    switch ($_GET["controller"]) {


      case 'livro':

      require_once("controller/livro_controller.php");
      require_once("models/livro_class.php");


      switch ($_GET['modo']) {

        case 'novo':
              $controller_livro= new controllerLivro();
              $controller_livro::novo();
               //echo "string";
            break;

        case 'editar':
              $controller_livro= new controllerLivro();
              $controller_livro::Editar();
               echo "router";
            break;

      case 'excluir':
              $controller_livro= new controllerLivro();
              $controller_livro::Excluir();
             //echo "string";
          break;


      }


      case 'usuario':

      require_once("controller/usuario_controller.php");
      require_once("models/usuario_class.php");


      switch ($_GET['modo']) {

        case 'login':
              $controller_usuario= new controllerUsuario();
              $controller_usuario::login();
               //echo "string";
            break;



      }


    }
 ?>
