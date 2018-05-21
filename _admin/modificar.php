<?php
require_once('../Connections/conexion.php');
?>
<?php

  
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

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
    <!-- InstanceBeginEditable name="ContenidoAdmin" -->
    <script src="scriptupload.js"></script>
    <script src="../js/scriptadmin.js"></script>
    <script src="../js/tinymce/tinymce.min.js"></script>

    <script>
        tinymce.init({
        selector: '#strDescripcion',
        height: 300,
        menubar: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor'
        ],
        toolbar: 'undo redo |  bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link '
        });
    </script>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
           <?php /*  */ ?><div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="inventario.php">Inventario</a>
            </div>
            <!-- /.navbar-header -->
             
            <ul class="nav navbar-top-links navbar-right">
                
                               <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        
                        <li>
                            <a href="inventario.php"><i class="fa fa-bar-chart-o fa-fw"></i> Inventario</a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="historial.php"><i class="fa fa-table fa-fw"></i> Historal</a>
                        </li>
                        <li>
                            <a href="agregar.php"><i class="fa fa-edit fa-fw"></i> Agregar Producto</a>
                        </li>
                        <li>
                            <a href="modificar.php"><i class="fa fa-wrench fa-fw"></i> Modificar Productos</a>
                            
                        </li>
                        
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
         

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Agregar Producto</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Gestión de Productos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            
<br>

            
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Modificar Producto
                        </div>
                        <div class="panel-body">
                        
                        <form action="modificar2.php" method="post">
                            <select name="p_id" size="5">

                            <?PHP
                            include("../Connections/conexion.php");
                            $q_s_fish = "SELECT * FROM productos"; 


                            $result_fish=mysqli_query($con,$q_s_fish) or die(mysqli_error($con));
                            
                            if(!$result_fish){
                            echo "Error en obtenci<F3>n de la tabla fish<br>\n";
                            exit;
                            }
                            
                            
                            while($row=$row_queryCar= mysqli_fetch_array($result_fish) ){
                            
                                    $num=$row['p_nombre'];
                                    $nombre= $row['id_productos'];
                                    echo "<option value=".$nombre."> ".$num."</option>";
                                    
                                }//for
                            ?>
                            </select>
                            <input type="submit" value="enviar">
                        </form>
<?php
                            
                           /*
                                $ssql = "select * from productos";
                                $rs = mysql_query ($con,$ssql);
                                while ($fila = mysql_fetch_array($rs)){
                                    
                                    if ( $datos_usuario["id_pais"] == $fila["id_pais"] ){
                                        echo "<option value='" . $fila["id_pais"] . "' selected='selected'>" . utf8_encode($fila["nombre_pais"]) . "</option>";
                                    }
                                    else {
                                        echo "<option value='" . $fila["id_pais"] . "'>" . utf8_encode($fila["nombre_pais"]) . "</option>";
                                    } 
                                    }
                                mysql_free_result ($rs);*/
                            ?>
                      
                            
                                    
                              </div>
                           

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>