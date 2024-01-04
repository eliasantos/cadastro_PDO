<!-- alterar.php -->
<?php require_once 'ClassUsuario.php'; ?>
<?php require_once 'ClassUsuarioDAO.php'; ?>

<?php
$id = isset($_GET['id']) ? $_GET['id'] : '';
$nome = isset($_GET['nome']) ? $_GET['nome'] : '';
$sobrenome = isset($_GET['sobrenome']) ? $_GET['sobrenome'] : '';
$cpf = isset($_GET['cpf']) ? $_GET['cpf'] : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';
$celular = isset($_GET['celular']) ? $_GET['celular'] : '';
$senha = isset($_GET['senha']) ? $_GET['senha'] : '';
?>

<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Lista de cadastro</title>
</head>

<body>
  <div class="container">
    <div class="form-image">
      <img src="assets/img/obra.svg">
    </div>
    <div class="form">
      <form action="alterarProcessa.php" method="POST">
        <div class="form-header">
          <div class="title">
            <h1>Altere Seus Dados</h1>
          </div>

        </div>

        <div class="input-group">
        
          <div class="input-box">
          <input type="hidden" name="id" readonly="true" value="<?php echo $id;?>">
            <label for="firstname">Primeiro Nome</label>
            <input id="firstname" type="text" name="firstname" value="<?php echo $nome; ?>" required>
          </div>

          <div class="input-box">
            <label for="lastname">Sobrenome</label>
            <input id="lastname" type="text" name="lastname" value="<?php echo $sobrenome; ?>" required>
          </div>

          <div class="input-box">
            <label for="cpf">CPF</label>
            <input id="cpf" type="text" name="cpf" value="<?php echo $cpf; ?>" required>
          </div>

          <div class="input-box">
            <label for="email">E-mail</label>
            <input id="email" type="email" name="email" value="<?php echo $email; ?>" required>
          </div>

          <div class="input-box">
            <label for="number">Celular</label>
            <input id="number" type="tel" name="number" value="<?php echo $celular; ?>" required>
          </div>

          <div class="input-box">
            <label for="password">Senha</label>
            <input id="password" type="password" name="password" value="<?php $senha; ?>" >
          </div>

          <div class="continue-button">
            <button type="submit">Alterar</button>
          </div>
          <div class="continue-button">
            <a href="listar.php">Voltar</a>
          </div>
      </form>
    </div>
  </div>
</body>

</html>