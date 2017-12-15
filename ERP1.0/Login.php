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
<html>
    <head>
        <title>ERP</title>
    </head>
    <body>
        <div class="corpo">
             
            <form name="login" method="post" action="LoginForm.php">
                <fieldset>
                    <legend>Autenticação de usuário</legend>
                    <label>Login</label>
                    <input type="text" name="nome"/>
                    <br>
                    <label>Senha</label>
                    <input type="password" name="senha"/>
                    <br>
                    <input type="submit" value="Enviar" name="envia" />
                    <input type="reset" value="Limpar" name="limpa"/>
                </fieldset>
                    
                    
            </form>
             

    </body>
</html>

