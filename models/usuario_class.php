<?php
  class Usuario{

    public $idUsuario;
    public $nomeUser;
    public $cpf;
    public $senha;
    public $foto;
    public $idNivel;

    public function __construct(){
       require_once('bd_class.php');
     }

     //Função de login
       public function Login($Usuario){
         session_start();
         //Script para chamar a procedure de login
         addslashes($sql="select * FROM tbl_usuario Where cpf='".$Usuario->cpf."' and senha='".$Usuario->senha."';");

         echo $sql;
         $con=new Mysql_db();
         $pdoCon = $con->Conectar();
         //Executa o script
         $pdoCon->query($sql);

         //Script para pegar o id que retorna da Procedure

         $select = $pdoCon->query($sql);


         if($rs=$select->fetch(PDO::FETCH_ASSOC)){

           $idUsuario = $rs['idUsuario'];

           if ($idUsuario > 0) {
             $_SESSION['idUsuarioLogado'] = $idUsuario;
             header('location:index.php');
           }
         }else {
           echo('<script> alert("Falha na autenticação!");
          window.location.href = "index.php"</script>');
         }



       }




    public function listarUserPorId($dados){
        $sql="select * from tbl_usuario where idUsuario=".$dados->idUsuario;
          //  echo $sql;

       $conex = new Mysql_db();

       $PDO_conex = $conex->Conectar();

       $select = $PDO_conex->query($sql);



       if ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
         $listUser = new Usuario();



           $listUser->idUsuario = $rs['idUsuario'];
           $listUser->nomeUser = $rs['nomeUser'];
           $listUser->cpf = $rs['cpf'];
           $listUser->senha = $rs['senha'];
           $listUser->foto = $rs['foto'];
           $listUser->idNivel = $rs['idNivel'];

         }

       $conex->Desconectar();

       if (isset($listUser)) {
           return $listUser;
       }

     }

  }

 ?>
