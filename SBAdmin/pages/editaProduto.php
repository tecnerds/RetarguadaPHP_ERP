<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ERP PN v0.1</title>

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
                        <h1 class="page-header">Cadastro de produtos</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

<!--IMPUTS AQUI-->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">

<div class="panel-heading">
    Preencha os campos abaixo:
</div>
<div class="panel-body">

<!-- /.row -->
<div class="row">
    
    <?php
        include_once'../../Modulos/Database/alteraProdutoDao.php';
        $id=$_GET['id'];

      ?>
      
    
            <div class="col-lg-4">
                <form role="form" method="post" action="../../Modulos/Database/editaProdutoDao.php">
                        <div class="form-group">
                            <label>Código Interno:</label>
                            <p class="form-control-static"><?php echo $id; ?></p>
                <form role="form" method="post" action=>
                    <input type="hidden" name="id" value='<?php echo $id; ?>'>
                        </div>                    
                        <div class="form-group">
                            <label>Nome do produto:</label>
                            <input name="nome" class="form-control" placeholder="40 caracteres no máximo" required value='<?php echo $nome; ?>'>
                        </div>
                        <div class="form-group">
                            <label>Código de barras:</label>
                            <input name="codBarra" type="number" class="form-control" placeholder="13 dígitos no máximo" value='<?php echo $codBarra; ?>'>
                        </div>
                        <div class="form-group">
                            <label>Valor custo:</label>
                            <input name="vCusto" type="text" class="form-control" value='<?php echo $vCusto; ?>'>
                        </div>
                        <div class="form-group">
                            <label>Valor venda:</label>
                            <input name="vVenda" type="text" class="form-control" required value='<?php echo $vVenda; ?>'>
                        </div>
                        <div class="form-group">
                            <label>Descrição:</label>
                            <textarea name="desc" class="form-control" rows="3" placeholder="100 caracteres no máximo"><?php echo $descricao; ?></textarea>
                        </div>
                        <button type="button" class="btn btn-default">Editar</button>
                        <button type="submit" class="btn btn-default">Salvar Alteração</button>
                        <button type="reset" class="btn btn-default">Limpar</button>

                </form>
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
