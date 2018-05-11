<?php require_once('Connections/conexionsolar.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$_GET["producto"] = ObtenerIdaPartirdeSEO($_GET["producto"]);
$varProducto_DatosProducto = $_GET["producto"];

mysql_select_db($database_conexionsolar, $conexionsolar);
$query_DatosProducto = sprintf("SELECT * FROM tblproducto WHERE tblproducto.intSubcategoria = %s", GetSQLValueString($varProducto_DatosProducto, "int"));
//echo $query_DatosProducto;
$DatosProducto = mysql_query($query_DatosProducto, $conexionsolar) or die(mysql_error());
$row_DatosProducto = mysql_fetch_assoc($DatosProducto);
$totalRows_DatosProducto = mysql_num_rows($DatosProducto);
?>

  <?php  $_SESSION['numeroventa'] = 1;?>
  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Principal.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>ADRIRSA tienda energia renovable solar fontaneria solar <?php echo ObtenerNombreSubcategoria($row_DatosProducto['intSubcategoria']); ?></title>
<meta name="title" content="ADRIRSA tienda energia renovable solar fontaneria  <?php echo ObtenerNombreSubcategoria($row_DatosProducto['intSubcategoria']); ?>">
<meta name="description" content="Categoria<?php echo ObtenerNombreSubcategoria($row_DatosProducto['intSubcategoria']); ?>. Tienda de productos de energia solar termica y fotovoltaica"

<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
 <?php include("includes/referenciabase.php"); ?>
<link href="estilo/principal.css" rel="stylesheet" type="text/css" />
<link href="estilo/menu.css" rel="stylesheet" type="text/css" />
 <?php include("includes/contador.php"); ?>
</head>
 
<body>

<div class="container">
 		 <div class="header">
 		   <div class="headerinterior"><img src="images/logotienda2.png" width="300" height="100" alt="ADRIRSA tienda energia renovable solar fontaneria "/><div class="headerderecho"><img src="images/componentes.png" width="300" height="100" alt="ADRIRSA tienda online energia renovable solar fontaneria"/><!-- end .header --></div></div></div>
 		  <div class="subcontenedor">
 		 <div class="sidebar1">
 		 <?php include("includes/catalogo.php"); ?>
         
  		<!-- end .sidebar1 --></div>
  		<div class="content">
  		  <h1><!-- InstanceBeginEditable name="Titulo" --><?php echo ObtenerNombreSubcategoria($row_DatosProducto['intSubcategoria']); ?><!-- InstanceEndEditable --></h1>
  		  <!-- InstanceBeginEditable name="Contenido" -->
        


 		 <div class="resultadoproduc"> 
        <div class="fotoproduc"><img src="documentos/productos/<?php echo $row_DatosProducto['strImagen']; ?>" width="200" height="200" /></div>
        <div class="textoproduc">
        <table width="600" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="50" valign="top"><a href="<?php echo $row_DatosProducto['strEnlace']; ?>">Mas informacion</a></td>
    <td height="50" valign="top">&nbsp;</td>
    <td height="50" valign="top">&nbsp;</td>
  </tr>       
  <tr >
    <td width="300" valign="top"class="tablaprincipal">&nbsp;&nbsp;&nbsp;Articulo</td>
     <td width="150" align="right"class="tablaprincipal">Precio&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_DatosProducto['strNombre']; ?></td>
      <td align="right"><?php echo $row_DatosProducto['dblPrecio']; ?> &euro;</td>
      <td align="center">
      <a href="carrito_add.php?producto=<?php echo $row_DatosProducto['idProducto']; ?>"><img src="images/carrito.jpg" width="30" height="18" /></a></td>
    
     </tr> 
    <?php } while ($row_DatosProducto = mysql_fetch_assoc($DatosProducto)); ?>

</table>
        </div></div>
        

  <div class="prova">
<br /> IVA no incluido, portes pagados a partir de 50 euros 
<br />
<br />     
  <td colspan="2"><!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_button_pinterest_pinit"></a>

</div>

  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5132467a26319b6c"></script>   
    </div>
  		  <!-- InstanceEndEditable --><!-- end .content --></div>
   		 <!-- end .subccontenedor -->
    </div>
  <div class="footer"><?php include("includes/pie.php"); ?>
   
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($DatosProducto);
?>
