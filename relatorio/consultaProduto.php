<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf8">
        <title>Relátorio Produto</title>
        <style>
        	table, caption, th, td {
            	border: 1px solid black;
            	border-collapse: collapse;
        	}
        	caption, th, td {
            	padding: 5px;
            	text-align: left;

        	}
        	caption{
        		text-align: center;
        	}
        </style>
    </head>
    <body>

    	<center><h1>Consultar Produtos Cadastrados</h1>
    	<form action="" method="get">
    		<label>Pesquisa</label>
    		<input type="text" name="pesquisa">
    		<input type="submit" value="Pesquisar">
    	</form>

        <?php
        include_once '../Dao/Banco.php';
        
        	$sql = "select * from produto;";
        	$salva = mysqli_query($conexao, $sql);
        	echo "<table>";
        	echo "<caption>Produtos Cadastrados</caption>";
            echo"<strong><tr><th>Código</th><th>Nome</th><th>Descrição</th><th>Cód Barra</th><th>Preço de Custo</th><th>Preço de Venda</th></tr></strong>";
        	     	
        	while ($resultado = mysqli_fetch_array($salva)) {
        		$id = $resultado[0];
        	    $nome = $resultado[1];
        	    $codBarra = $resultado[2];
        	    $descricao = $resultado[3];
        	    $vCusto = $resultado[4];
        	    $vVenda = $resultado[5];
        	        	    
        	        	    
        	    
        	    echo"<tr><th>$id</th><th>$nome</th><th>$codBarra</th><th>$descricao</th><th>$vCusto</th><th>$vVenda</th></tr>";
        	    }

        		echo "</table>";

      

        mysqli_close($conexao);
        ?>
        
        
        
    </body>
</html>
        
	