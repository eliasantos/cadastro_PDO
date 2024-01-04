<!--  listar.php -->
<?php require_once 'ClassUsuario.php'; ?>
<?php require_once 'ClassUsuarioDAO.php'; ?>


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
            <img src="assets/img/curiosity-search-animate.svg">
        </div>
        <div class="form">
            <form action="ControleUsuario.php" method="POST">
                <div class="form-header">
                    <div class="title">
					
                        <h1>RESULTADO DO CADASTRO</h1>
                    </div>
                </div>
				<div class="login-button">
                        <button><a href="index.php">Home</a></button>
                    </div>

                <div class="input-group">
				

<?php
$classUsuarioDAO = new ClassUsuarioDAO();
$array = $classUsuarioDAO->listar();

echo "<center>";
echo "<table border=2>";
echo "  <tr>";
echo "      <th>ID        </th> ";
echo "      <th>Nome      </th> ";
echo "      <th>E-mail    </th> ";
echo "      <th>Celular   </th> ";
echo "      <th>Excluir   </th> ";
echo "      <th>Alterar   </th>";
echo "  </tr>";
echo "</center>";

foreach ($array as $usuario) {
    echo "<tr>";//abrindo linha
    echo "<td>" . $usuario['id'] . "</td>";
    echo "<td>" . $usuario['nome'] . $usuario['sobrenome'] . "</td>";
	echo "<td>" . $usuario['email'] . "</td>";
    echo "<td>" . $usuario['celular'] . "</td>";
    echo "<td> ";
    ?>
    <form action="excluir.php" method="GET">
        <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
        <button>
            <img src='assets/img/deletar.png' width="30px" height="30px">
        </button>
    </form>
    <?php
    echo "</td> ";
    echo "<td> ";
    ?>
    <form action="alterar.php" method="GET">
        <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
        <input type="hidden" name="firstname" value="<?php echo $usuario['nome']; ?>">
		<input type="hidden" name="sobrenome" value="<?php echo $usuario['sobrenome']; ?>">
		<input type="hidden" name="cpf" value="<?php echo $usuario['cpf']; ?>">
		<input type="hidden" name="email" value="<?php echo $usuario['email']; ?>">
		<input type="hidden" name="number" value="<?php echo $usuario['celular']; ?>">
        <button>
            <img src='assets/img/editar.png' width="30px" height="30px">
        </button>
		
    </form>
    <?php
    echo "</td> ";
    echo "</tr>"; //fechando linha
}
?>
<a href="index.php"><img src='assets/img/people.svg' width=50px height=50px></a><br><br>
                </div>
			
            </form>
        </div>
    </div>
	
</body>
</html>






