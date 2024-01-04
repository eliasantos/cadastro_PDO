<?php
require_once 'ClassUsuario.php';
require_once 'ClassUsuarioDAO.php';


$nome = $_POST['firstname'];
$sobrenome = $_POST['lastname'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$celular = $_POST['number'];
$senha = $_POST['password'];

$novoUsuario = new ClassUsuario();
$novoUsuario->setNome($nome);
$novoUsuario->setSobrenome($sobrenome);
$novoUsuario->setCpf($cpf);
$novoUsuario->setEmail($email);
$novoUsuario->setCelular($celular);
$novoUsuario->setSenha($senha);

$classUsuarioDAO = new ClassUsuarioDAO();
$classUsuarioDAO->cadastrar($novoUsuario);

// Redirecionar para a página de usuarios cadastrados
header('Location: listar.php');
exit();
?>
