<?php
   class controllerLivro{


     // Selecionar todos os livros
     public function listar(){

       $livro = new Livro();
       return $livro::listarTodos();

     }

     public function listarPorId($id){
          $livro = new Livro();
         $iddado=$id;

         //echo $idCai;
         $livro->idlivro=$iddado;
         return $livro::listarPorId($livro);

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


     public function Editar() {
       require_once 'modulo.php';
       $idLivro=$_GET['idLivro'];

       echo $idLivro;

       $livro = new Livro();

       $livro->idlivro=$_GET['idLivro'];

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


       // iniciado variaveis
       $diretorio_completo=Null;
       $MovUpload=false;
       $imagem_file=Null;
       $foto="vavavavav";


         // Pegando a Foto
         if (!empty($_FILES['fllivro']['name'])) {
            $imagem_file = true;
            $diretorio_completo=salvarFoto($_FILES['fllivro'],'imagensLivro');

            if ($diretorio_completo == "Erro") {
                echo "<script>
                    alert('arquivo nao movido');
                    window.history.go(-1);
                    </script>";
                  $MovUpload=false;
            }else {
              $MovUpload=true;
            }
          }else {
            $imagem_file = false;
          }

          if ($imagem_file == true && $MovUpload==true) {
            $foto =$diretorio_completo;
          }else {
            $foto="nada";
          }


         $livro ->imagem =$foto;
         $livro::Update($livro);


       }


   }




 ?>
