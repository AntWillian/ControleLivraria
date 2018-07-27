<?php
   class controllerLivro{


     // Selecionar todos os livros
     public function listar(){

       $livro = new Livro();
       return $livro::listarTodos();

     }


   }

 ?>
