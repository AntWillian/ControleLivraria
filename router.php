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
              $controller_Produto= new controllerProduto();
              $controller_Produto::editar();
               //echo "string";
            break;

      case 'excluir':
            $controller_Produto= new controllerProduto();
            $controller_Produto::excluir();
             //echo "string";
          break;


      }


    }
 ?>
