<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ERP PN v0.1</title>

    <!-- BOTÕES ALTERNATIVOS -->
    <link href="../../Plugins/TABS/BTNALTER.css" rel="stylesheet" type="text/css">

    <!-- TABS -->
    <link href="../../Plugins/TABS/TABS.css" rel="stylesheet" type="text/css">

    <!-- TABS -->
    <script src="../../Plugins/TABS/TABS.js"></script>

    <!-- PACE -->
    <script src="../../Plugins/PACE/PACE.js"></script>

    <!-- PACE -->
    <link href="../../Plugins/PACE/pace.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <?php include_once'estrutura.php'; ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Cadastro de pedidos</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

<!--IMPUTS AQUI-->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">

<div class="panel-heading">

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Fornecedor')">Fornecedor</button>
  <button class="tablinks" onclick="openCity(event, 'Itens')">Itens</button>
</div>

</div>
<div class="panel-body">

<!-- /.row -->
<div class="row">

<div class="col-lg-8">

<!--marcando espaço onde colocaremos as coisas no corpo da página-->
<div id="Fornecedor" class="tabcontent">
<input name="nome" class="BTNALTERCOD" placeholder="">
<button type="reset" class="BTNALTERCODBOTAO">Pesquisar</button>
<button type="reset" class="BTNALTERCODBOTAO">Novo</button>
<p class="BTNALTERCODLABEL">Fornecedor Vanusa</p>


<p class="BTNALTERDATALABEL">Previsão para entrega:</p>
<input type="date" name="nome" class="BTNALTERDATACAMPO" placeholder="">
<p class="BTNALTERDATALABEL">Data do pedido:</p>
<input name="nome" class="BTNALTERDATACAMPO BTNALTERDATACAMPODESAT" placeholder="" value="01/01/2018">
<br>
<br>
<button type="reset" class="BTNALTERCODBOTAO">Continuar</button>
</div>

<div id="Itens" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>




</div>

</div>

</div>
</div>
</div>
</div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include_once'footer.php'; ?>

</body>

</html>
