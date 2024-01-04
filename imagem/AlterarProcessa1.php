<!-- AlterarProcessa1.php -->
<?php require_once 'ClassUsuario.php'; ?>
<?php require_once 'ClassUsuarioDAO.php';?>
<?php
  $matricula =$_GET['matricula']; 
  $nome      =$_GET['nome'];
   $classUsuarioDAO=new ClassUsuarioDAO;
   $array=$classUsuarioDAO->alterar($matricula,$nome);
   //echo $array;
   if($array==TRUE){
	  header('Location:listar.php'); 
   }else{
	   echo "ERRO";
   }
?>