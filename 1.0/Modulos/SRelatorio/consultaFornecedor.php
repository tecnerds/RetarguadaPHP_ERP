<?php

include_once '../../Modulos/Database/Banco.php';

	$sql = "select * from fornecedor;";
    //$sql = "select * from produto;";
	$salva = mysqli_query($conexao, $sql);
    //começar com 1
    $parimpar = 0;
    //$link="editaProduto.php";

	while ($resultado = mysqli_fetch_array($salva)) {

		$id = $resultado[0];
	    $razaoSocial = $resultado[1];
	    $cnpj = $resultado[2];
	    $nomeFantasia = $resultado[3];
	    $tel = $resultado[4];
	    $contato = $resultado[5];
        $email=$resultado[6];
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
        <td><a href="editaFornecedor.php?id='.$id.'">'.$id.'</a></td>
        <td>'.$razaoSocial.'</td>
        <td>'.$cnpj.'</td>
        <td>'.$nomeFantasia.'</td>
        <td class="center">'.$tel.'</td>
        <td class="center">'.$contato.'</td>
        <td>'.$email.'</td>
        </tr>';

	    }

mysqli_close($conexao);

?>