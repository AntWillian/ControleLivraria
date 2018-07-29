<?php

$idlivro = 0;
$titulo = Null;
$autor = Null;
$descricao = Null;
$editora =Null;
$numPaginas = Null;
$numEdicoes = Null;
$anoEdicao =Null;
$estoque = Null;
$preco = Null;
$imagem = Null;




  if(isset($_GET['modo'])){
    $modo=$_GET['modo'];
    if ($modo == "buscarId") {
      $idlivro=$_GET['idLivro'];
      //echo $modo;

      require_once ('../controller/livro_controller.php');
      require_once ('../models/livro_class.php');
      //instacia a controller
      //Passa o id para a controller
      $controller_livro = new controllerLivro();

      $retornoModel=$controller_livro::listarPorId($idlivro);

      // var_dump($retornoModel);

      $titulo= $retornoModel ->titulo;
      $autor= $retornoModel ->autor;
      $descricao= $retornoModel ->descricao;
      $editora= $retornoModel ->editora;
      $numPaginas= $retornoModel ->numPaginas;
      $numEdicoes= $retornoModel ->numEdicoes;
      $anoEdicao= $retornoModel ->anoEdicao;
      $estoque= $retornoModel ->estoque;
      $preco= $retornoModel ->preco;
      $imagem= $retornoModel ->imagem;

    }
  }
 ?>

 <script>
     // $("#form").submit(function(event){
     //      //Recupera o id gravado no Form pelo atribute-id
     //      var id = $(this).data("id");
     //
     //          modo='editar';
     //    //anula a ação do submit tradicional "botao" ou F5
     //     event.preventDefault();
     //     $.ajax({
     //        type: "POST",
     //        url: "router.php?controller=livro&modo="+modo+"&idLivro="+id,
     //        //alert (url);
     //        data: new FormData($("#form")[0]),
     //        cache:false,
     //        contentType:false,
     //        processData:false,
     //        async:true,
     //        success: function(dados){
     //            // $('.modal').html(dados);
     //             alert(dados);
     //        }
     //    });
     // });



     $(".fechar").click(function() {
         //$(".modalContainer").fadeOut();
       $(".modalContainer").slideToggle(500);
       });

 </script>




<!-- Modal -->
<div >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close fechar" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

        <h1  id="exampleModalLabel">Editar Livro</h1>
      </div>
      <div class="modal-body">

        <!-- <form class="Frmlivro"  action="router.php?controller=livro&modo=editar&idLivro=<?php echo($idlivro) ?>" method="post" enctype="multipart/form-data" data-id="<?php echo($idlivro) ?>"> -->


        <form class="" action="../router.php?controller=livro&modo=editar&idLivro=<?php echo($idlivro) ?>" method="post" enctype="multipart/form-data">

          <div class="foto_user_cad">
              <img id="img" src="" alt="">
          </div>

          <div class="segura_file_prest">
            <div class="filePrest">
              <input  id="upload" type="file" name="fllivro" >
            </div>
          </div>


            <div class="form-group">
              <label for="inputAddress">Titulo</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="Titulo do livro" name="txtTitulo" value="<?php echo (utf8_decode($titulo)) ?>">
            </div>

            <div class="form-group">
              <label for="inputAddress">Autor(a)</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="Autor(a) do livro" name="txtAutor" value="<?php echo (utf8_decode($autor)) ?>">
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Descrição</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="txtDescricao" ><?php echo (utf8_decode($descricao)) ?></textarea>
            </div>

            <div class="form-group">
              <label for="inputAddress">Editora</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="Editora do livro" name="txtEditora" value="<?php echo (utf8_decode($editora)) ?>">
            </div>

            <div class="form-row">
             <div class="form-group col-md-6">
               <label for="inputPaginas">Numero de paginas</label>
               <input type="text" class="form-control" id="inputPaginas" placeholder="Numero de paginas" name="txtNumPagina" value="<?php echo (utf8_decode($numPaginas)) ?>">
             </div>
             <div class="form-group col-md-6">
               <label for="inputEdicao">Numero da edição</label>
               <input type="text" class="form-control" id="inputEdicao" placeholder="Numero da edição" name="txtNumEdicao" value="<?php echo (utf8_decode($numEdicoes)) ?>" >
             </div>
           </div>


           <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputAno">Ano de edição</label>
              <input type="text" class="form-control" id="inputAno" placeholder="Ano de edição" name="txtAnoEdicao" value="<?php echo (utf8_decode($anoEdicao)) ?>" >
            </div>
            <div class="form-group col-md-6">
              <label for="inputEstoque">No estoque</label>
              <input type="text" class="form-control" id="inputEstoque" placeholder="No estoque" name="txtNumEstoque" value="<?php echo (utf8_decode($estoque)) ?>">
            </div>

            <div class="form-group col-md-6">
              <label for="inputEstoque">Preco</label>
              <input type="text" class="form-control" id="inputPreco" placeholder="No estoque" name="txtPreco" value="<?php echo (utf8_decode($preco)) ?>" >
            </div>
          </div>

          <input type="submit" class="btn btn-primary" value="Salvar">

        </form>

      </div>

      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Salvar">
      </div> -->

    <!-- </form> -->


  </div>
</div>
