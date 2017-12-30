    <?php 

        include_once'Banco.php';
            $id=$_GET['id'];

            $sql="select * from produto where id ='$id';";
            $seleciona=mysqli_query($conexao,$sql);

            while ($edita = mysqli_fetch_array($seleciona)) {
                $id=$edita[0];
                $nome=$edita[1];
                $descricao=$edita[2];
                $codBarra=$edita[3];
                $vCusto=$edita[4];
                $vVenda=$edita[5];

            }

        mysqli_close($conexao);
        
       
     ?>