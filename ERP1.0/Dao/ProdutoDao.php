<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Produto | SPPHP</title>
    </head>
    <body>
        <?php
            include_once 'Banco.php';
                
                $nome=$_POST['nome'];
                $codBarra=$_POST['codBarra'];
                $descricao=$_POST['desc'];
                $vCusto=$_POST['vCusto'];
                $vVenda=$_POST['vVenda'];
                
                $sql = "insert into produto (nome, codBarra, descricao, vCusto, vVenda) values ('$nome','$codBarra','$descricao','$vCusto','$vVenda');";
                $salva = mysqli_query($conexao, $sql);
            mysqli_close($conexao);
            
            echo "";
        ?>
            <center><h1>Dados salvo com sucesso</h1></center>
        <ul>
            <a href="../produto.php"><li>Novo Produto</li></a>
            <a href="../cadastro.php"><li>Menu Principal</li></a>
            
        </ul>
    </body>
</html>
