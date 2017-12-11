<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="corpo">
            <form name="login" method="post" action="Login.php">
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
                <?php
                    require_once 'Login.php';
                    $logar = new Login;
                    
                ?>
                    
            </form>
        </div>
       
        <?php
            require_once 'Conexao.php';
            $bd = new Conexao;
            
        ?>
    </body>
</html>
