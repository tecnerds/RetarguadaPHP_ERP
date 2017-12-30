<?php

include_once 'Banco.php';


            //MÉTODO POST NÃO ESTÁ FUNCIONANDO, SEI LÁ O MOTIVO
            //ISSO É ALGO PARA O BACK-END PESQUISAR AI E DAR UM JEITO

            $nome=$_GET["nome"];
            $codBarra=$_GET["codBarra"];
            $descricao=$_GET["desc"];
            $vCusto=$_GET["vCusto"];
            $vVenda=$_GET["vVenda"];
            
            echo $nome;


            $sql = "insert into produto (nome, codBarra, descricao, vCusto, vVenda) values ('$nome','$codBarra','$descricao','$vCusto','$vVenda');";
            if($salva = mysqli_query($conexao, $sql)){
            echo "<p>Cadastro realizado com sucesso!</p>";

            }else
                echo "<p>Erro ao cadastrar</p>" . mysqli_error($conexao);

            //NÃO HÁ RETORNO PARA TELA INCIAL. TEM COMO FAZER, PORÉM SERIA COMPLICADO AGORA
            //RECOMENDO PESQUISAR E IMPLEMENTAR O AJAX


        mysqli_close($conexao);

?> 

