<?php

include_once 'Banco.php';



            $razaoSocial=$_POST["razaoSocial"];
            $cnpj=$_POST["cnpj"];
            $nomeFantasia=$_POST["nomeFantasia"];
            $tel=$_POST["tel"];
            $contato=$_POST["contato"];
            $email=$_POST["email"];
            $dataHoraEdita = date("Y-m-d H:i:s");      
            


            $sql = "insert into fornecedor (razaoSocial, cnpj, nomeFantasia, tel, contato, email, dataHoraEdita) values ('$razaoSocial','$cnpj','$nomeFantasia','$tel','$contato', '$email', '$dataHoraEdita');";
            if($salva = mysqli_query($conexao, $sql)){
            echo "<p>Cadastro realizado com sucesso!</p>";
            echo '
            <!DOCTYPE html>
            <html>
            <head>
            <meta http-equiv="refresh" content="0;url=../../SBAdmin/pages/fornecedor.php">
            <title>SB Admin 2</title>
            <script language="javascript">
                window.location.href = "../../SBAdmin/pages/fornecedor.php"
            </script>
            </head>
            <body>
            Go to <a href="../../SBAdmin/pages/fornecedor.php">../SBAdmin/pages/fornecedor.php</a>
            </body>
            </html>';

            }else
                echo "<p>Erro ao cadastrar</p>" . mysqli_error($conexao);
                echo "<br>".$sql;

            //NÃO HÁ RETORNO PARA TELA INCIAL. TEM COMO FAZER, PORÉM SERIA COMPLICADO AGORA
            //RECOMENDO PESQUISAR E IMPLEMENTAR O AJAX


        mysqli_close($conexao);



?> 


