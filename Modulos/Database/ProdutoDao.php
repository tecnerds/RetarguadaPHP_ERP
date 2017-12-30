<?php

include_once 'Banco.php';



            $nome=$_POST["nome"];
            $codBarra=$_POST["codBarra"];
            $descricao=$_POST["desc"];
            $vCusto=$_POST["vCusto"];
            $vVenda=$_POST["vVenda"];
            $dataHoraEdita = date("Y-m-d H:i:s");
            
            echo $nome;


            $sql = "insert into produto (nome, codBarra, descricao, vCusto, vVenda, dataHoraEdita) values ('$nome','$codBarra','$descricao','$vCusto','$vVenda','$dataHoraEdita');";
            if($salva = mysqli_query($conexao, $sql)){
            echo "<p>Cadastro realizado com sucesso!</p>";
            echo '
            <!DOCTYPE html>
            <html>
            <head>
            <meta http-equiv="refresh" content="0;url=../../SBAdmin/pages/produtos.php">
            <title>SB Admin 2</title>
            <script language="javascript">
                window.location.href = "../../SBAdmin/pages/produtos.php"
            </script>
            </head>
            <body>
            Go to <a href="../../SBAdmin/pages/produtos.php">../SBAdmin/pages/produto.php</a>
            </body>
            </html>';

            }else
                echo "<p>Erro ao cadastrar</p>" . mysqli_error($conexao);

            //NÃO HÁ RETORNO PARA TELA INCIAL. TEM COMO FAZER, PORÉM SERIA COMPLICADO AGORA
            //RECOMENDO PESQUISAR E IMPLEMENTAR O AJAX


        mysqli_close($conexao);



?> 


