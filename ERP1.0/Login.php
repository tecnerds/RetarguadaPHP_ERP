<?php
// ------- Cria a classe Funcionario
class login {
    private $nome; // ------ Nome de usuário
    private $senha; // ------ Senha do usuário
    //private $func_access; // ------- Nivel de acesso do funcionario as funções
    //private $func_setor; // ------- Setor em que o funcionário trabalha

    function __construct() {
        
    }

    function getNome() {
        return $this->nome;
    }

    function getSenha() {
        return $this->senha;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }


}   
?>
