<?php
    include_once 'Database/Banco.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Produto | SPPHP</title>
    </head>
    <body>
    <center><h1>Cadastro de Produto</h1></center>
    <form action="Dao/ProdutoDao.php" method="post">
            <fieldset>
                <legend>Cadastro de Produto</legend>
                            
                <label>Nome</label>
                <input type="text" name="nome"/>
                <br/>
                <label>Código de barra</label>
                <input type="text" name="codBarra"/>
                <br/>
                <label>Descrição</label>
                <textarea maxlength="100" name="desc"></textarea>
                <br/>
                <label>Valor Custo</label>
                <input type="text" name="vCusto"/>
                <br/>
                <label>Valor Venda</label>
                <input type="text" name="vVenda"/>
                <br/>
                <input type="submit" value="Salvar"/>
                <input type="reset" value="Cancelar"/>
                
            </fieldset>
        </form>
        <a href="index.php">Menu de Cadastro</a>
      
          <iframe src="relatorio/consultaProduto.php" width="100%" height="500px">Produto</iframe>
        
        <?php 
            mysqli_close($conexao);
        ?>  
      
    </body>
</html>
