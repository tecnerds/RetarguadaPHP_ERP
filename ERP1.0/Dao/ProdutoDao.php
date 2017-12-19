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
                if($salva = mysqli_query($conexao, $sql)){
                    echo "<p>Cadastro realizado com sucesso!</p>";
                    
                                        

                }else
                    echo "<p>Erro ao cadastrar</p>" . mysqli_error($conexao);


            mysqli_close($conexao);
         ?>   

        
        <ul>
            <a href="../produto.php"><li>Novo Produto</li></a>
            <a href="consultaProduto.php"><li>Consultar Produto</li></a>
            <a href="../cadastro.php"><li>Menu Principal</li></a>
        </ul>

           
        
         
</html>
