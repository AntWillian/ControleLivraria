<?php
  require_once 'validacao.php';

  if (isset($_SESSION['idUsuarioLogado'])) {
    $idUser=$_SESSION['idUsuarioLogado'];

    require_once ('../controller/usuario_controller.php');
    require_once ('../models/usuario_class.php');
    //instacia a controller
    //Passa o id para a controller
    $controller_user= new controllerUsuario();

    $retornoModel=$controller_user::listarUserPorId($idUser);

    $idUsuario=$retornoModel->idUsuario;
    $nomeUser=$retornoModel->nomeUser;
    $cpf=$retornoModel->cpf;
    $senha=$retornoModel->senha;
    $foto=$retornoModel->foto;
    $idNivel=$retornoModel->idNivel;

  }
 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Livraria </title>
    <script  src="../js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
<script src="../js/validacoes.js"> </script>

    <!-- script  -->

  <script>
      $(document).ready(function () {


        //Efeito para abrir a div Container com timer de 2 segundos (Novo Registro)
        $(".novo").click(function(){
           $(".modalContainer").slideToggle(2000);

        });

        //Efeito para abrir a div Container com timer de 2 segundos
          $(".editar").click(function(){
             $(".modalContainer").fadeIn(2000);

          });


          //Efeito para abrir a div Container com timer de 2 segundos
            $(".visualizar").click(function(){
               $(".modalContainer").fadeIn(2000);

            });



      });

      function mensagem() {
        swal ( "Atenção!!" , " Você não tem tem esta permissão" , "warning" )   ;
      }

      function Editar(idItem){

        $.ajax({
          type: "GET",
          url: "editarLivro.php",
          data: {modo:'buscarId',idLivro:idItem},
          success: function(dados){
            $('.modalAparecer1').html(dados);
          }

        });
      }

      function Visualizar(idItem){

        $.ajax({
          type: "GET",
          url: "visualizarLivro.php",
          data: {modo:'buscarId',idlivro:idItem},
          success: function(dados){
            $('.modalAparecer1').html(dados);
          }

        });
      }

      function Excluir(idIten){

        var resposta;

        resposta = confirm('Deseja excluir?');

        if (resposta==true)
        {
        //alert(idIten);
          $.ajax({
              type: "GET",
              url: "../router.php?controller=livro&modo=excluir&id="+idIten,
              // data: {modo:'excluir',id:idIten},
              success: function(dados){
                //  $('#datatable').html(dados);
                  alert (dados);
                  location.reload();
              }
          });
        }
      }




  </script>


  </head>

  <body class="nav-md">

    <div class="modalContainer">
      <div class="modalAparecer1">

      </div>
    </div>

    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fas fa-book-reader"> </i> <span>Livraria</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo ("../".utf8_decode($foto)); ?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bem Vindo,</span>
                <h2><?php echo (utf8_decode($nomeUser)); ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Geral</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="home.php">Livros</a></li>

                    </ul>
                  </li>

                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->


          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo ("../".utf8_decode($foto)); ?>" alt=""><?php echo (utf8_decode($nomeUser)); ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">

                    <li><a href="?out"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>
                  </ul>
                </li>


              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Livros</h2>

                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Titulo</th>
                        <th>Autor(a)</th>
                        <th>Editora</th>
                        <th>Estoque</th>
                        <th>Preço</th>
                        <th>Opções</th>
                      </tr>
                    </thead>


                    <tbody>
                      <?php
                      require_once ('../controller/livro_controller.php');
                      require_once ('../models/livro_class.php');

                      $controller_livro = new controllerLivro();

                      $Livro=$controller_livro::listar();
                      $cont = 0;


                        //var_dump($listLivro);
                      while ($cont <count($Livro)) {

                      ?>
                      <tr>
                        <td><?php echo (utf8_decode($Livro[$cont]->titulo)); ?></td>
                        <td><?php echo (utf8_decode($Livro[$cont]->autor)); ?></td>
                        <td><?php echo (utf8_decode($Livro[$cont]->editora)); ?></td>
                        <td><?php echo (utf8_decode($Livro[$cont]->estoque)); ?></td>
                        <td><?php echo (utf8_decode($Livro[$cont]->preco)); ?></td>

                        <?php
                          if ($idNivel==1) {

                         ?>
                        <td><div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a href="#" class="editar" onclick="Editar(<?php echo $Livro[$cont]->idlivro?>)"><i class="fa fa-edit"></i></a></div>
                          <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a href="#" onclick="Visualizar(<?php echo $Livro[$cont]->idlivro?>)"><i class="fa fa-eye visualizar"></i></a></div>
                          <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a href="#"  onclick="Excluir(<?php echo $Livro[$cont]->idlivro?>)"><i class="fa fa-trash"></i></a></div>
                        </td>

                        <?php
                        // code...
                      }else if($idNivel == 2){


                         ?>



                         <td><div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a href="#"  onclick="mensagem()"><i class="fa fa-edit"></i></a></div>
                           <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a href="#" onclick="Visualizar(<?php echo $Livro[$cont]->idlivro?>)"><i class="fa fa-eye visualizar"></i></a></div>
                           <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a href="#/trash" onclick="mensagem()"><i class="fa fa-trash"></i></a></div>
                         </td>

                         <?php
                           }

                          ?>
                      </tr>

                      <?php
                      $cont +=1;
                    }
                       ?>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>

          <?php
            if ($idNivel==1) {

           ?>
           <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Novo Livro</button>


          <?php
          // code...
        }else if($idNivel == 2){


           ?>



           <button type="button" class="btn btn-success" onclick="mensagem()">Novo Livro</button>


           <?php
             }

            ?>
        </div>
        <!-- /page content -->

      
        <!-- /footer content -->
      </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

            <h1  id="exampleModalLabel">Novo Livro</h1>
          </div>
          <div class="modal-body">

            <form class="Frmlivro" action="../router.php?controller=livro&modo=novo" method="post" enctype="multipart/form-data" >

              <div class="foto_user_cad">
                  <img id="img" src="" alt="">
              </div>

              <div class="segura_file_prest">
                <div class="filePrest">
                  <input required id="upload" type="file" name="fllivro" >
                </div>
              </div>


                <div class="form-group">
                  <label for="inputAddress">Titulo</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="Titulo do livro" name="txtTitulo">
                </div>

                <div class="form-group">
                  <label for="inputAddress">Autor(a)</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="Autor(a) do livro" name="txtAutor">
                </div>

                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Descrição</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="txtDescricao"></textarea>
                </div>

                <div class="form-group">
                  <label for="inputAddress">Editora</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="Editora do livro" name="txtEditora">
                </div>

                <div class="form-row">
                 <div class="form-group col-md-6">
                   <label for="inputPaginas">Numero de paginas</label>
                   <input type="text" class="form-control validacao" id="inputPaginas" placeholder="Numero de paginas" name="txtNumPagina"  maxlength="15" >
                 </div>
                 <div class="form-group col-md-6">
                   <label for="inputEdicao">Numero da edição</label>
                   <input type="text" class="form-control validacao" id="inputEdicao" placeholder="Numero da edição" name="txtNumEdicao">
                 </div>
               </div>


               <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputAno">Ano de edição</label>
                  <input type="text" class="form-control validacao" id="inputAno" placeholder="Ano de edição" name="txtAnoEdicao">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputEstoque">No estoque</label>
                  <input type="text" class="form-control validacao" id="inputEstoque" placeholder="No estoque" name="txtNumEstoque">
                </div>

                <div class="form-group col-md-6">
                  <label for="inputEstoque">Preco</label>
                  <input type="text" class="form-control" id="inputPreco" placeholder="No estoque" name="txtPreco" onKeyPress="return(MascaraMoeda(this,'.',',',event))" maxlength="5">
                </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary">Salvar</input>
              </div>

            </form>



          </div>

        </div>
      </div>
    </div>




    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>


    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>
