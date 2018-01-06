<?php
	include_once'Banco.php';

		$id = $_POST['id'];
		$nome=$_POST["nome"];
		$codBarra=$_POST["codBarra"];
		$descricao=$_POST["desc"];
		$vCusto=$_POST["vCusto"];
		$vVenda=$_POST["vVenda"];
		$dataHoraEdita = date("Y-m-d H:i:s");
		$sql = "update produto set nome = '$nome',codBarra = '$codBarra', descricao = '$descricao', vCusto = '$vCusto', vVenda = '$vVenda', dataHoraEdita= '$dataHoraEdita' where id = '$id';";
		if ($edita=mysqli_query($conexao,$sql)) {
			echo "<p>Alteração realizado com sucesso!</p>";
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
            echo "<p>Erro ao alterar produto</p>" . mysqli_error($conexao);
		

	mysqli_close($conexao);
?>
