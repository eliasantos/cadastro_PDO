<!--  ClassUsuarioDAO.php  -->
<?php
require_once 'conexao.php';
class ClassUsuarioDAO {
    public function cadastrar($novoUsuario) {
        try {
            $pdo = Conexao::getInstance();
            $sql = "INSERT INTO usuario (nome, sobrenome, cpf, email, celular, senha) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $novoUsuario->getNome());
            $stmt->bindValue(2, $novoUsuario->getSobrenome());
            $stmt->bindValue(3, $novoUsuario->getCpf());
            $stmt->bindValue(4, $novoUsuario->getEmail());
            $stmt->bindValue(5, $novoUsuario->getCelular());
            $stmt->bindValue(6, $novoUsuario->getSenha());
            $stmt->execute();
    
            echo "<center><h1>Cadastro realizado com sucesso!</h1><center><br>";
            ?>
            <a href="listar.php">Listar</a>
            <?php
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }//fechamento do método cadastrar
		
// Listar todos os usuários
public function listar() {
    try {
        $pdo = Conexao::getInstance();
        $sql = "SELECT id, nome, sobrenome, cpf, email, celular FROM usuario";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (PDOException $erro) {
        return $erro->getMessage();
    }
}//fechamento do método listar
	
// Excluir usuário pelo matricula
public function excluir($novoUsuario){
    try {
        $pdo = Conexao::getInstance();
        $sql = "DELETE FROM usuario WHERE id=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $novoUsuario->getId());
        $stmt->execute();
        return TRUE;
    } catch (PDOException $erro) {
        return $erro->getMessage();
    }
}//fechamento do método excluir
	
// Atualizar
public function alterar($novoUsuario) {
    try {
        $pdo = Conexao::getInstance(); 
        $sql = "UPDATE usuario SET nome=:nome, sobrenome=:sobrenome, cpf=:cpf, email=:email, celular=:celular, senha=:senha WHERE id=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $novoUsuario->getId());
        $stmt->bindValue(':nome', $novoUsuario->getNome());
        $stmt->bindValue(':sobrenome', $novoUsuario->getSobrenome());
        $stmt->bindValue(':cpf', $novoUsuario->getCpf());
        $stmt->bindValue(':email', $novoUsuario->getEmail());
        $stmt->bindValue(':celular', $novoUsuario->getCelular());
        $stmt->bindValue(':senha', $novoUsuario->getSenha());
        $stmt->execute();
        return true;
    } catch (PDOException $erro) {
        echo "Erro: " . $erro->getMessage();
        return false;
    }
}
//fechamento da função alterar
}//fechamento da classe