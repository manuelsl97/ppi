<?php require_once('../Connections/conexion.php'); 
RestringirAcceso("1");?>

<?php
//MySQLi Fragmentos por http://www.dreamweaver-tutoriales.com
//Copyright Jorge Vila 2015

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

$mensajeexito=0;

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "forminsertar")) {

	$marcas=0;
	if ((isset($_POST["intMarcas"])) && ($_POST["intMarcas"]=="1"))
		$marcas=1;
	
  $updateSQL = sprintf("UPDATE tblconfiguracion SET strTelefono=%s, strEmail=%s, strLogo=%s, intMarcas=%s WHERE idConfiguracion=%s",
                       GetSQLValueString($_POST["strTelefono"], "text"),
					   GetSQLValueString($_POST["strEmail"], "text"),
					   GetSQLValueString($_POST["strLogo"], "text"),		  
					   GetSQLValueString($marcas, "text"),					  GetSQLValueString($_POST["idConfiguracion"], "int"));

//echo $updateSQL;
$Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));
	
$mensajeexito=1;


}

?>
<?php

$query_DatosConsulta = sprintf("SELECT * FROM tblconfiguracion WHERE idConfiguracion=1");

$DatosConsulta = mysqli_query($con,  $query_DatosConsulta) or die(mysqli_error($con));
$row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta);
$totalRows_DatosConsulta = mysqli_num_rows($DatosConsulta);
?><!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/Administracion.dwt.php" codeOutsideHTMLIsLocked="false" -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>Administración Tienda 2017</title>
    <!-- InstanceEndEditable -->
    <!-- Bootstrap Core CSS -->
    <?php include("../includes/adm-cabecera.php"); ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<!-- InstanceBeginEditable name="ContenidoAdmin" -->
<script src="scriptupload.js"></script>
<script src="../js/scriptadmin.js"></script>
<div id="wrapper">
  <!-- Navigation -->
  <?php include("../includes/adm-menu.php"); ?>
  <div id="page-wrapper">
     <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Configuración</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <?php /*?><a href="usuario-lista.php" class="btn btn-outline btn-info">Volver atrás</a><br><?php */?>
<br>

 <?php if ($mensajeexito==1){?>
<div class="row">
                <div class="col-lg-12">
                <div class="alert alert-success">La configuración se ha guardado correctamente.</div>
	</div>
</div>     
<?php }?>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Editar Configuración
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                  <form action="configuracion.php" method="post" id="forminsertar" name="forminsertar" role="form" >
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input class="form-control" placeholder="e-mail" name="strEmail" id="strEmail" value="<?php echo $row_DatosConsulta["strEmail"];?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Teléfono</label>
                                            <input class="form-control" placeholder="Teléfono que saldrá en la parte superior" name="strTelefono" id="strTelefono" value="<?php echo $row_DatosConsulta["strTelefono"];?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Mostrar Marcas</label>
 <div class="checkbox">
<label>
<input type="checkbox" value="1" name="intMarcas" id="intMarcas" <?php if ($row_DatosConsulta["intMarcas"]==1){ ?>checked="checked" <?php }?>>
Marcar para mostrar el apartado de marcas en el menú de la izquierda
</label>
</div>
                                        </div>
                                       
                                          
		
       


<?php 
//BLOQUE INSERCION IMAGEN
//***********************
//***********************
//***********************									  //***********************
//PARÁMETROS DE IMAGEN
$nombrecampoimagen="strLogo";
$nombrecampoimagenmostrar="strLogopic";
$nombrecarpetadestino="../images/"; //carpeta destino con barra al final
$nombrecampofichero="file1";
$nombrecampostatus="status1";
$nombrebarraprogreso="progressBar1";
$maximotamanofichero="500000"; //en Bytes, "0" para ilimitado. 1000000 Bytes = 1000Kb = 1Mb
$tiposficheropermitidos="jpg,png"; //  Por ejemplo "jpg,doc,png", separados por comas y poner "0" para permitir todos los tipos
$limiteancho="139"; // En píxels, "0" significa cualquier tamaño permitido
$limitealto="39"; // En píxels, "0" significa cualquier tamaño permitido
									  
$cadenadeparametros="'".$nombrecampoimagen."','".$nombrecampoimagenmostrar."','".$nombrecarpetadestino."','".$nombrecampofichero."','".$nombrecampostatus."','".$nombrebarraprogreso."','".$maximotamanofichero."','".$tiposficheropermitidos."','".$limiteancho."','".$limitealto."'";

//$cadenadeparametros="";

									  
									  ?>
<div class="form-group">
	<label>Imagen de logo</label>
	<input class="form-control"  name="<?php echo $nombrecampoimagen;?>" id="<?php echo $nombrecampoimagen;?>" value="<?php echo $row_DatosConsulta["strLogo"];?>">
</div> 
<div class="form-group">
	<div class="row">
		<div class="col-lg-6">
			<input type="file" name="<?php echo $nombrecampofichero;?>" id="<?php echo $nombrecampofichero;?>"><br>
		</div>
		<div class="col-lg-6">
			<input class="form-control" type="button" value="Subir Fichero" onclick="uploadFile(<?php echo $cadenadeparametros;?>)">
		</div>
	</div>
	<progress id="<?php echo $nombrebarraprogreso;?>" value="0" max="100" style="width:100%;"></progress>
	<h5 id="<?php echo $nombrecampostatus;?>"></h5>
	<?php if ($row_DatosConsulta["strLogo"]!=""){?>
	<img src="<?php echo $nombrecarpetadestino.$row_DatosConsulta["strLogo"];?>" alt="" id="<?php echo $nombrecampoimagenmostrar;?>">
	<?php }
	else
	{?>
	<img src="../images/usuarios/sinfoto.jpg" alt="" width="200"  id="<?php echo $nombrecampoimagenmostrar;?>">
	<?php }?>
</div>   
<?php /*?>
//***********************
//***********************
//***********************									  //***********************
// FIN BLOQUE INSERCION IMAGEN
<?php */?>     
                                                                
                                        <button type="submit" class="btn btn-success">Actualizar</button>
                                      <input name="idConfiguracion" type="hidden" id="idConfiguracion" value="<?php echo $row_DatosConsulta["idConfiguracion"];?>">
                                      <input name="MM_insert" type="hidden" id="MM_insert" value="forminsertar">
                                       
                                    </form>
                              </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                
                <!-- /.col-lg-6 -->
            </div>
  </div>
  <!-- /#page-wrapper -->
</div>
<!-- InstanceEndEditable --><!-- /#wrapper -->

     <?php include("../includes/adm-pie.php"); ?>
   

</body>

<!-- InstanceEnd --></html>