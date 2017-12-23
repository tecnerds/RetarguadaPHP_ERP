<?php

$servidor = "xmysql.supermercadovanusa.com.br";
$usuario = "supermercadovan";
$senha = "hAcker99";
$banco = "supermercadovanusa";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
if (!$conexao) {
	echo "<p>erro na conexao com banco de dados</p>" . mysqli_connect_error();
}


