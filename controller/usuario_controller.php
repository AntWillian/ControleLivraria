<?php
   class controllerUsuario{

     //Função para fazer o login do usuario
     Function Login(){
       $usuario = new Usuario;
       //Seta o usuario e senha
       $usuario->cpf = $_POST["txt_usuario"];
       $usuario->senha = $_POST["txt_senha"];
       //Chama a função de Login
       $usuario::Login($usuario);
     }


     public function listarUserPorId($id){
          $user = new Usuario();
         $iddado=$id;

         //echo $idCai;
         $user->idUsuario=$iddado;
         return $user::listarUserPorId($user);

       }




   }




 ?>
