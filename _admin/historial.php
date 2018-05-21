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
                    <h1 class="page-header">HIstorial</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>id_historial</th>
                                        <th>id_usuario</th>
                                        <th>producto</th>
                                        <th>cantidad</th>
                                        
                                    </tr>
                                </thead>
                                <tbody> 
                                    <?php
                                    include("../Connections/conexion.php");
                                    //$elu=$_SESSION['uid'];
                                    $query_hist = mysqli_query($con,  "SELECT * FROM historial ") or die(mysqli_error($con));
                                    //$query_historial=mysqli_query($con,  "SELECT * FROM historial where u_id=$elu") or die(mysqli_error($con));
                                   
                                   while($row=$row_queryhist= mysqli_fetch_array($query_hist) ){
                                        $pru=$row['id_productos'];
                                        $query_prod=mysqli_query($con,"SELECT p_nombre from productos where id_productos=$pru ")  or die(mysqli_error($con)); 
                                        $row_p=mysqli_fetch_array($query_prod);
                                        //$procid=$row['p_id'];
                                      // $insert_hist= mysqli_query($con,  "INSERT INTO historial (id_usuarios,id_productos,cantidad) VALUES ($elu,$procid,1)") or die(mysqli_error($con));
                                        //$update_carrito=mysqli_query($con,"UPDATE productos SET p_almacen=p_almacen-1 WHERE id_productos=$procid") or die(mysqli_error($con));
                                        echo'
                                            <tr class="odd gradeX">
                                            <td class="center">'.$row["id_historial"].'</td>
                                            <td>'.$row["id_usuarios"].'</td>
                                            <td>'.$row_p["p_nombre"].'</td>
                                            <td>'.$row["cantidad"].'</td>
                                            
                                            
                                            </tr>
                                        ';
                                    }
                                   //$delete_carrito=mysqli_query($con,"DELETE FROM carrito WHERE u_id = $elu") or die(mysqli_error($con));
                                    
                                    ?>
                                    
                                   
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                           

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
