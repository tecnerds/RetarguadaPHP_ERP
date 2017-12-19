<?php

$servidor = "localhost";
$usuario = "patrick";
$senha = "123";
$banco = "erp_homologacao";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
if (!$conexao) {
	echo "<p>erro na conexao com banco de dados</p>" . mysqli_connect_error();
}


