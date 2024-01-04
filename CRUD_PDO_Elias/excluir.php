<!--  excluir.php -->
<?php require_once 'ClassUsuario.php'; ?>
<?php require_once 'ClassUsuarioDAO.php'; ?>

<?php

$classUsuarioDAO = new ClassUsuarioDAO();
$array = $classUsuarioDAO->listar();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $novoUsuario = new ClassUsuario();
    $novoUsuario->setId($id);

    $classUsuarioDAO = new ClassUsuarioDAO();

    $resultado = $classUsuarioDAO->excluir($novoUsuario);

    if ($resultado) {
        header('Location: listar.php');
    } else {
        echo "Erro ao excluir usuário.";
    }
}
?>

 


