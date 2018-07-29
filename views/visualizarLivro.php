
<script>
$(".fechar").click(function() {
    //$(".modalContainer").fadeOut();
  $(".modalContainer").slideToggle(500);
  });

</script>

<?php
if(isset($_GET['modo'])){

    $modo=$_GET['modo'];

    if ($modo == "buscarId") {
      $id=$_GET['idlivro'];

      //echo $modo;

      require_once ('../controller/livro_controller.php');
      require_once ('../models/livro_class.php');
      //instacia a controller
      //Passa o id para a controller
      $controller_livro = new controllerLivro();

      $retornoModel=$controller_livro::listarPorId($id);

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



<!-- Modal -->
<!-- <div class="tamanho" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Visualizar Livro</h5>
        <button type="button" class="close fechar" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card" >
          <img class="card-img-top col-md-6" src="<?php echo ("../".utf8_decode($imagem)); ?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo (utf8_decode($titulo)); ?></h5>
            <p class="card-text"><?php echo (utf8_decode($descricao)); ?></p>

          </div>
        </div>
      </div>

    </div>
  </div>
</div> -->


<!-- Modal -->
<div >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close fechar" data-dismiss="modal " aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h1 class="modal-title" id="exampleModalLongTitle">Visualizar Livro</h1>

      </div>
      <div class="modal-body">
        <div class="modal-body">
          <div class="card" >
            <img class="card-img-top col-md-6" src="<?php echo ("../".utf8_decode($imagem)); ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?php echo (utf8_decode($titulo)); ?></h5>
              <p class="card-text"><?php echo (utf8_decode($descricao)); ?></p>

            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>
