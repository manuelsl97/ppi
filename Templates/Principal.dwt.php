<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<!-- TemplateBeginEditable name="doctitle" -->
    <title>Home | E-Shopper</title>
    <meta name="description" content="">
    <meta name="author" content="">
<!-- TemplateEndEditable -->
    <?php include("includes/cabecera.php"); ?>
<!-- TemplateBeginEditable name="head" -->
    <!-- TemplateEndEditable -->
</head><!--/head-->

<body>
<!-- TemplateBeginEditable name="Contenido" -->
<?php include("includes/header.php"); ?>
<?php include("includes/slider.php"); ?>
<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <?php include("includes/menuizquierda.php"); ?>
      </div>
      <div class="col-sm-9 padding-right">
        <?php include("includes/listaproductos.php"); ?>
        <?php include("includes/categoriasespeciales.php"); ?>
        <?php include("includes/recomendados.php"); ?>
      </div>
    </div>
  </div>
</section>
<?php include("includes/pie.php"); ?>
<?php include("includes/piejs.php"); ?>
<!-- TemplateEndEditable -->
</body>
</html>