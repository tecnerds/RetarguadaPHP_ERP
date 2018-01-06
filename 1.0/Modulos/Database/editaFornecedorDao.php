<?php
	include_once'Banco.php';

		$id = $_POST['id'];
		$razaoSocial=$_POST["razaoSocial"];
		$cnpj=$_POST["cnpj"];
		$nomeFantasia=$_POST["nomeFantasia"];
		$tel=$_POST["tel"];
		$contato=$_POST["contato"];
		$email=$_POST["email"];
		$dataHoraEdita = date("Y-m-d H:i:s");

		$sql = "update fornecedor set razaoSocial = '$razaoSocial', cnpj = '$cnpj', nomeFantasia = '$nomeFantasia', tel = '$tel', contato = '$contato', email = '$email', dataHoraEdita= '$dataHoraEdita' where id = '$id';";
		if ($edita=mysqli_query($conexao,$sql)) {
			echo "<p>Alteração realizado com sucesso!</p>";
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
			Go to <a href="../../SBAdmin/pages/produtos.php">../SBAdmin/pages/fornecedor.php</a>
			</body>
			</html>';
		}else
            echo "<p>Erro ao alterar fornecedor</p>" . mysqli_error($conexao);
		

	mysqli_close($conexao);
?>
