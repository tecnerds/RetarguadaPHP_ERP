<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Subgrupo | SPPHP</title>
    </head>
    <body>
        <?php
            include_once 'Banco.php';
                $nome=$_POST['nome'];
                $descricao=$_POST['desc'];
                
                $sql = "insert into subgrupo (nome, descricao) values ('$nome', '$descricao')";
                $salva = mysqli_query($conexao, $sql);
                
            mysqli_close($conexao);
        ?>
        <center><h1>Dados salvo com sucesso</h1></center>
         <ul>
            <a href="../subgrupo.php"><li>Novo Subgrupo</li></a>
            <a href="../cadastro.php"><li>Menu Principal</li></a>
            
        </ul>
    </body>
</html>
