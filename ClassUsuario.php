<!-- ClassUsuario.php -->
<?php
class ClassUsuario {
        private $id;
        private $nome;
        private $sobrenome;
        private $cpf;
        private $email;
        private $celular;
        private $senha;
    
        function getId() {
            return $this->id;
        }
    
        function setId($id) {
            $this->id = $id;
        }
    
        function getNome() {
            return $this->nome;
        }
    
        function setNome($nome) {
            $this->nome = $nome;
        }
    
        function getSobrenome() {
            return $this->sobrenome;
        }
    
        function setSobrenome($sobrenome) {
            $this->sobrenome = $sobrenome;
        }
    
        function getCpf() {
            return $this->cpf;
        }
    
        function setCpf($cpf) {
            $this->cpf = $cpf;
        }
    
        function getEmail() {
            return $this->email;
        }
    
        function setEmail($email) {
            $this->email = $email;
        }
    
        function getCelular() {
            return $this->celular;
        }
    
        function setCelular($celular) {
            $this->celular = $celular;
        }
    
        function getSenha() {
            return $this->senha;
        }
    
        function setSenha($senha) {
            $this->senha = $senha;
        }
    }
      
?>
