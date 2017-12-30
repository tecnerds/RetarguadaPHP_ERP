<?php

include_once '../../Modulos/Database/Banco.php';

	$sql = "select * from produto order by dataHoraEdita desc;";
    //$sql = "select * from produto;";
	$salva = mysqli_query($conexao, $sql);
    //começar com 1
    $parimpar = 0;
    //$link="editaProduto.php";

	while ($resultado = mysqli_fetch_array($salva)) {

		$id = $resultado[0];
	    $nome = $resultado[1];
	    $codBarra = $resultado[2];
	    $descricao = $resultado[3];
	    $vCusto = $resultado[4];
	    $vVenda = $resultado[5];
        //$dataCadastro = $resultado[6]

        
        // testando a função edita.php

        //começará com 0 e vai evoluindo, isso também pode registrar quantas resultados tem a tabela
        $parimpar++;
        //A tabela do sbadmin precisa marcar com par ou ímpar cada linha
        if($id % 2 == 0){
           $parimpar="odd";
        } else {
           $parimpar="even";
        }
        	    
	    //echo"<tr><th>$id</th><th>$nome</th><th>$codBarra</th><th>$descricao</th><th>$vCusto</th><th>$vVenda</th></tr>";

        echo'

        <tr class="'.$parimpar.' gradeX">
        <td><a href="editaProduto.php?id='.$id.'">'.$id.'</a></td>
        <td>'.$nome.'</td>
        <td>'.$codBarra.'</td>
        <td>'.$descricao.'</td>
        <td class="center">'.$vCusto.'</td>
        <td class="center">'.$vVenda.'</td>
        </tr>';

	    }

mysqli_close($conexao);

?>