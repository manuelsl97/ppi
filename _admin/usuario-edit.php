<?php require_once('../Connections/conexion.php'); 
RestringirAcceso("1");?>

<?php
//MySQLi Fragmentos por http://www.dreamweaver-tutoriales.com
//Copyright Jorge Vila 2015

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "forminsertar")) {
	
	if (comprobaremailunico($_POST["idUsuario"], $_POST["strEmail"]))
	{
	
	if ($_POST["strPassword"]!="")
	{
		$updateSQL = sprintf("UPDATE tblusuario SET strEmail=%s, strNombre=%s, intNivel=%s, intEstado=%s, strPassword=%s, strImagen=%s WHERE idUsuario=%s",
                       GetSQLValueString($_POST["strEmail"], "text"),
					   GetSQLValueString($_POST["strNombre"], "text"),
					   GetSQLValueString($_POST["intNivel"], "int"),
					   GetSQLValueString($_POST["intEstado"], "int"),
					   GetSQLValueString(md5($_POST["strPassword"]), "text"),
					   GetSQLValueString($_POST["strImagen"], "text"),
					   GetSQLValueString($_POST["idUsuario"], "int"));
		
	}
	else
	{
  $updateSQL = sprintf("UPDATE tblusuario SET strEmail=%s, strNombre=%s, intNivel=%s, intEstado=%s, strImagen=%s WHERE idUsuario=%s",
                       GetSQLValueString($_POST["strEmail"], "text"),
					   GetSQLValueString($_POST["strNombre"], "text"),
					   GetSQLValueString($_POST["intNivel"], "int"),
					   GetSQLValueString($_POST["intEstado"], "int"),
					   GetSQLValueString($_POST["strImagen"], "text"),
					   GetSQLValueString($_POST["idUsuario"], "int"));
		}
//echo $updateSQL;
$Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));

  $updateGoTo = "usuario-lista.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
	}
else
	{
		//EL EMAIL ESTÁREPETIDO
		 $insertGoTo = "error.php?error=2&id=".$_POST["idUsuario"];
  		 header(sprintf("Location: %s", $insertGoTo));
	}
}

?>
<?php

$query_DatosConsulta = sprintf("SELECT * FROM tblusuario WHERE idUsuario=%s", GetSQLValueString($_GET["id"], "int"));

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
                    <h1 class="page-header">Gestión de Usuarios</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <a href="usuario-lista.php" class="btn btn-outline btn-info">Volver atrás</a><br>
<br>

            
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Editar Usuario
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                  <form action="usuario-edit.php" method="post" id="forminsertar" name="forminsertar" role="form" onSubmit="javascript:return validarusuarioeditar();">
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input class="form-control" placeholder="e-mail" name="strEmail" id="strEmail" value="<?php echo $row_DatosConsulta["strEmail"];?>">
                                        </div>
                                        <div class="alert alert-danger oculto" id="erroremail">E-mail obligatorio</div>
                                        <div class="form-group">
                                            <label>Contraseña</label>
                                            <input class="form-control" placeholder="Escribir Contraseña sólo si se va a cambiar" name="strPassword" id="strPassword">
                                        </div>
                                        <div class="form-group">
                                            <label>Nombre del Usuario</label>
                                            <input class="form-control" placeholder="Escribir Nombre del usuario" name="strNombre" id="strNombre" value="<?php echo $row_DatosConsulta["strNombre"];?>">
                                        </div>
                                         <div class="alert alert-danger oculto" id="errornombre">Nombre obligatorio</div>
                                          
		<div class="form-group">
			<label>Nivel de Usuario</label>
			<select name="intNivel" class="form-control" id="intNivel">
				<option value="0" <?php if ($row_DatosConsulta["intNivel"]=="0") echo "selected"; ?>>0: Usuario público de tienda</option>
				<option value="1" <?php if ($row_DatosConsulta["intNivel"]=="1") echo "selected"; ?>>1: SuperAdministrador </option>
				<option value="10" <?php if ($row_DatosConsulta["intNivel"]=="10") echo "selected"; ?>>10: Gestor de Ventas</option>
				<option value="100" <?php if ($row_DatosConsulta["intNivel"]=="100") echo "selected"; ?>>100: Gestor de Productos</option>

			</select>
		</div>
       <div class="form-group">
			<label>Estado</label>
			<select name="intEstado" class="form-control" id="intEstado">
				<option value="0" <?php if ($row_DatosConsulta["intEstado"]=="0") echo "selected"; ?>>Inactivo</option>
				<option value="1" <?php if ($row_DatosConsulta["intEstado"]=="1") echo "selected"; ?>>Activo</option>
				
			</select>
		</div>


<?php 
//BLOQUE INSERCION IMAGEN
//***********************
//***********************
//***********************									  //***********************
//PARÁMETROS DE IMAGEN
$nombrecampoimagen="strImagen";
$nombrecampoimagenmostrar="strImagenpic";
$nombrecarpetadestino="../images/usuarios/"; //carpeta destino con barra al final
$nombrecampofichero="file1";
$nombrecampostatus="status1";
$nombrebarraprogreso="progressBar1";
$maximotamanofichero="500000"; //en Bytes, "0" para ilimitado. 1000000 Bytes = 1000Kb = 1Mb
$tiposficheropermitidos="jpg,png"; //  Por ejemplo "jpg,doc,png", separados por comas y poner "0" para permitir todos los tipos
$limiteancho="200"; // En píxels, "0" significa cualquier tamaño permitido
$limitealto="200"; // En píxels, "0" significa cualquier tamaño permitido
									  
$cadenadeparametros="'".$nombrecampoimagen."','".$nombrecampoimagenmostrar."','".$nombrecarpetadestino."','".$nombrecampofichero."','".$nombrecampostatus."','".$nombrebarraprogreso."','".$maximotamanofichero."','".$tiposficheropermitidos."','".$limiteancho."','".$limitealto."'";

//$cadenadeparametros="";

									  
									  ?>
<div class="form-group">
	<label>Imagen</label>
	<input class="form-control"  name="<?php echo $nombrecampoimagen;?>" id="<?php echo $nombrecampoimagen;?>" value="<?php echo $row_DatosConsulta["strImagen"];?>">
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
	<?php if ($row_DatosConsulta["strImagen"]!=""){?>
	<img src="<?php echo $nombrecarpetadestino.$row_DatosConsulta["strImagen"];?>" alt="" id="<?php echo $nombrecampoimagenmostrar;?>">
	<?php }
	else
	{?>
	<img src="../images/usuarios/sinfoto.jpg" alt="" width="200" height="200" id="<?php echo $nombrecampoimagenmostrar;?>">
	<?php }?>
</div>   
<?php /*?>
//***********************
//***********************
//***********************									  //***********************
// FIN BLOQUE INSERCION IMAGEN
<?php */?>     
                                                                
                                        <button type="submit" class="btn btn-success">Editar</button>
                                      <input name="idUsuario" type="hidden" id="idUsuario" value="<?php echo $row_DatosConsulta["idUsuario"];?>">
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