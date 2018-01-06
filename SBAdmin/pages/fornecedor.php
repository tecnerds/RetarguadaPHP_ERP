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
                        <h1 class="page-header">Cadastro e consulta de fornecedor</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">


                <!-- PAINEL SUPERIOR AQUI -->
                <div class="col-lg-4">
                    <div class="panel panel-default">
                 <div class="panel-heading">
                            Painel de ações:
                        </div>
                        <div class="panel-body">
                           <a href="cadastrarFornecedor.php"><button type="button" class="btn btn-primary">Cadastrar novo Fornecedor</button></a>
                            <button type="button" class="btn btn-primary disabled">Gerar relatório</button>

                        </div>

                    </div>
                </div>


  <!--TABELA AQUI-->

     <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Últimos Fornecedores cadastrados:
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Código Interno</th>
                                        <th>Razão social</th>
                                        <th>CNPJ</th>
                                        <th>Nome Fantazia</th>
                                        <th>Telefone</th>
                                        <th>Contato</th>
                                        <th>E-mail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                       <?php include_once '../../Modulos/SRelatorio/consultaFornecedor.php'; ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
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
