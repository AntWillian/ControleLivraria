<?php
   class controllerLivro{


     // Selecionar todos os livros
     public function listar(){

       $livro = new Livro();
       return $livro::listarTodos();

     }


     public function Novo(){

       require_once 'modulo.php';

       $livro = new Livro();


       //$livro ->url = $url;
       $livro ->titulo = $_POST['txtTitulo'];
       $livro ->autor = $_POST['txtAutor'];
       $livro ->descricao = $_POST['txtDescricao'];

       $livro ->editora = $_POST['txtEditora'];
       $livro ->numPaginas = $_POST['txtNumPagina'];
       $livro ->numEdicoes = $_POST['txtNumEdicao'];
       $livro ->numPaginas = $_POST['txtNumPagina'];
       $livro ->anoEdicao = $_POST['txtAnoEdicao'];
       $livro ->estoque = $_POST['txtNumEstoque'];
       $livro ->preco = $_POST['txtPreco'];


       // iniciado variaveis de upload da foto
       $diretorio_completo=Null;
       $MovUpload=false;
       $imagem_file=Null;

       //pegando a foto

       if (!empty($_FILES['fllivro']['name'])) {
          $imagem_file = true;
          $diretorio_completo=salvarFoto($_FILES['fllivro'],'imagensLivro');
          if ($diretorio_completo == "Erro") {

                $MovUpload=false;
          }else {
            $MovUpload=true;
          }
        }else {
          $imagem_file = false;
        }


       $livro ->imagem =$diretorio_completo;




       $livro::Insert($livro);


   }



   }

 ?>
