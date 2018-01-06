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

    <?php include_once'estrutura.php';  ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Início</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                
                <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Painel de Teste
                        </div>
                        <div class="panel-body">
                            <p>Esse será a primeira tela que usuário verá assim que logar no sistema. Minha sugestão é que isso seja um resumo das coisas mais importantes que estão acontecendo: Gráficos de venda, últimas movimentações, mensagens importantes, calendário, etc.</p>
                        </div>
                        <div class="panel-footer">
                            O que podemos colocar aqui?
                        </div>
                    </div>
                </div>

                
                <div class="col-lg-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Produtos e Pessoas
                        </div>
                        <div class="panel-body">
                            <p>Esse sistema ainda está em desenvolvimento. Já estamos trabalhando em algumas coisas. Começaremos pelo cadastro e consulta de produtos. <br><br></p>
                        </div>
                        <div class="panel-footer">
                            Em desenvolvimento
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
