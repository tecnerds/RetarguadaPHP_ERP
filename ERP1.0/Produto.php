<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        <a href="cadastro.php">Menu de Cadastro</a>
    </body>
</html>
