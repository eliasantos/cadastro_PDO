<!-- alterarProcessa.php -->

<?php
require_once 'ClassUsuario.php';
require_once 'ClassUsuarioDAO.php';

$id = $_POST['id'];
$nome = $_POST['firstname']; // Corrigido para corresponder ao nome do input no formulário
$sobrenome = $_POST['lastname'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$celular = $_POST['number']; 
$senha = $_POST['password']; 

$novoUsuario = new ClassUsuario();
$novoUsuario->setId($id);
$novoUsuario->setNome($nome);
$novoUsuario->setSobrenome($sobrenome);
$novoUsuario->setCpf($cpf);
$novoUsuario->setEmail($email);
$novoUsuario->setCelular($celular);
$novoUsuario->setSenha($senha);

$classUsuarioDAO = new ClassUsuarioDAO();
$array = $classUsuarioDAO->alterar($novoUsuario);

if ($array == TRUE) {
    header('Location: listar.php');
} else {
    echo "Erro";
}
?>


	