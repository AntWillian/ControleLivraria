<?php
  class Livro{

    public $idlivro;
    public $titulo;
    public $autor;
    public $descricao;
    public $editora;
    public $numPaginas;
    public $numEdicoes;
    public $anoEdicao;
    public $estoque;
    public $preco;
    public $imagem;

    public function __construct(){
       require_once('bd_class.php');
     }


     public function listarTodos(){
      $sql="select * from tbl_livro";
      //  echo $sql;

        $conex = new Mysql_db();

        $PDO_conex = $conex->Conectar();

        $select = $PDO_conex->query($sql);

        $cont = 0;

        while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
          $listLivro[] = new Livro();



            $listLivro[$cont]->idlivro = $rs['idlivro'];
            $listLivro[$cont]->titulo = $rs['titulo'];
            $listLivro[$cont]->autor = $rs['autor'];
            $listLivro[$cont]->descricao = $rs['descricao'];
            $listLivro[$cont]->editora = $rs['editora'];
            $listLivro[$cont]->numPaginas = $rs['numPaginas'];
            $listLivro[$cont]->numEdicoes = $rs['numEdicoes'];
            $listLivro[$cont]->anoEdicao = $rs['anoEdicao'];
            $listLivro[$cont]->estoque = $rs['estoque'];
            $listLivro[$cont]->preco = $rs['preco'];
            $listLivro[$cont]->imagem = $rs['imagem'];


            $cont +=1;
        }

        $conex->Desconectar();

        if (isset($listLivro)) {
            return $listLivro;
        }

      }


    public function listarPorId($dados){
       $sql="select * from tbl_livro where idlivro=".$dados->idlivro;
     //  echo $sql;

       $conex = new Mysql_db();

       $PDO_conex = $conex->Conectar();

       $select = $PDO_conex->query($sql);



       if ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
         $listLivro = new Livro();



           $listLivro->idlivro = $rs['idlivro'];
           $listLivro->titulo = $rs['titulo'];
           $listLivro->autor = $rs['autor'];
           $listLivro->descricao = $rs['descricao'];
           $listLivro->editora = $rs['editora'];
           $listLivro->numPaginas = $rs['numPaginas'];
           $listLivro->numEdicoes = $rs['numEdicoes'];
           $listLivro->anoEdicao = $rs['anoEdicao'];
           $listLivro->estoque = $rs['estoque'];
           $listLivro->preco = $rs['preco'];
           $listLivro->imagem = $rs['imagem'];



       }

       $conex->Desconectar();

       if (isset($listLivro)) {
           return $listLivro;
       }

     }


    // CADASTRO DE NOVO Livro
    public function Insert($dados){
      $sql="insert into tbl_livro (titulo, autor, descricao, editora, numPaginas, numEdicoes, anoEdicao, estoque, preco, imagem)
      values('".$dados->titulo."', '".$dados->autor."', '".$dados->descricao."', '".$dados->editora."', '".$dados->numPaginas."',
      '".$dados->numEdicoes."', '".$dados->anoEdicao."', '".$dados->estoque."', '".$dados->preco."', '".$dados->imagem."')";

      echo $sql;


      $conex = new Mysql_db();

      $PDO_conex = $conex->Conectar();



        if ($PDO_conex->query($sql)) {
         header("location:views/home.php");
        }else{
          echo "erro";
        }

        $conex->Desconectar();
    }



// Atualizar Registro
    public function Update($dados){

      echo "  string";
      if ($dados->imagem == "nada") {
        $sql = "UPDATE tbl_livro SET
        titulo = '".$dados->titulo."',
        autor = '".$dados->autor."',
        descricao = '".$dados->descricao."',
        editora = '".$dados->editora."',
        numPaginas = '".$dados->numPaginas."',
        numEdicoes = '".$dados->numEdicoes."',
        anoEdicao ='".$dados->anoEdicao."',
        estoque = '".$dados->estoque."',
        preco = '".$dados->preco."'
        WHERE idLivro = ".$dados->idlivro;
      }else {
        $sql = "UPDATE tbl_livro SET
        titulo = '".$dados->titulo."',
        autor = '".$dados->autor."',
        descricao = '".$dados->descricao."',
        editora = '".$dados->editora."',
        numPaginas = '".$dados->numPaginas."',
        numEdicoes = '".$dados->numEdicoes."',
        anoEdicao ='".$dados->anoEdicao."',
        estoque = '".$dados->estoque."',
        preco = '".$dados->preco."',
        imagem = '".$dados->imagem."'
        WHERE idLivro = ".$dados->idlivro;
      }
              echo $sql;
              $conex = new Mysql_db();
              $PDO_conex = $conex->Conectar();
              if ($PDO_conex->query($sql)) {
                //echo("<script>location.reload();</script>");

              //  echo "string";
              }else{
                echo "erro";
              }
              $conex->Desconectar();
    }


    public function Delete($dados){
       $sql="Delete from tbl_livro where idlivro=".$dados->idlivro;

       $conex = new Mysql_db();

       $PDO_conex = $conex->Conectar();



       if ($PDO_conex->query($sql)) {

           //require_once('views/conteudo_planos.php');
           echo "Excluido com sucesso";
           // echo "
           // <script src='js/jquery7.min.js'></script>
           // <script  src='js/jcarousellite.js'></script>
           // <script  src='js/carrossel.js'></script>
           //     ";

       }else{
         echo "erro ao deletar";
       }

       $conex->Desconectar();

     }

  }

 ?>
