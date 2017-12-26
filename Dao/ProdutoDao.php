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

                     $link = ['../produto.php', '../relatorio/consultaProduto.php', '../index.php'];
                     $menu = ['Novo Produto', 'Consulta Produto', 'Menu Principal'];
                    echo "<ul>";
                        for ($i=0; $i<3; $i++){

                            echo "<a href='$link[$i]'><li>$menu[$i]</li></a>";

                        }

                    echo "</ul>";
                    
                                        

                }else
                    echo "<p>Erro ao cadastrar</p>" . mysqli_error($conexao);


            mysqli_close($conexao);
         ?> 
         <br>
         <iframe src="../relatorio/consultaProduto.php" width="100%" height="500px">Produto</iframe>
        
               
    </body> 
        
         
</html>
