<?php
	include_once 'Banco.php';
	if ($_POST["valores"] != ""){
		$valores = str_replace(",", "' OR id='", $_POST["valores"]);
		$sql = "DELETE FROM produto WHERE id='". $valores ."'";
		$result = mysqli_query($conexao, $sql);
		echo $sql;
	}
?>
