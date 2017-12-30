    <?php 

        include_once'Banco.php';
            $id=$_GET['id'];

            $sql="select * from fornecedor where id ='$id';";
            $seleciona=mysqli_query($conexao,$sql);

            while ($edita = mysqli_fetch_array($seleciona)) {
                $id=$edita[0];
                $razaoSocial=$edita[1];
                $cnpj=$edita[2];
                $nomeFantasia=$edita[3];
                $tel=$edita[4];
                $contato=$edita[5];
                $email=$edita[6];


            }

        mysqli_close($conexao);
        
       
     ?>