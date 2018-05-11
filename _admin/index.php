<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link href="../css/extraadmin.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <script src="../js/scriptadmin.js"></script>

    <div class="container">
       
    
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Accede a la administración</h3>
                    </div>
                    <div class="panel-body">
                        <form action="acceso.php" method="post" id="formacceso" name="formacceso" onSubmit="javascript:return validaraccesoadmin();" role="form">
                            <fieldset>
                                <div class="form-group">
                                <?php if (isset($_GET["error"])){?>
									<div class="alert alert-danger">Error de acceso, e-mail o password incorrectos.</div>
                                   <?php }?>
                                    <input class="form-control" placeholder="E-mail" name="strEmail" type="email" autofocus>
                                </div>
                                <div class="alert alert-danger oculto" id="erroremail">E-mail obligatorio</div>
                                        <div class="alert alert-danger oculto" id="erroremailreal">E-mail no parece estar bien escrito</div>
                                <div class="form-group">
                                   
                                    <input class="form-control" placeholder="Contraseña" name="strPassword" type="password" value="">
                                </div>
                                 <div class="alert alert-danger oculto" id="errorpass">Contraseña obligatoria</div>
                               
                                <!-- Change this to a button or input when using this as a form -->
                                <input name="Acceder" type="submit" id="Acceder" value="Acceder" class="btn btn-lg btn-success btn-block">
                                
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
