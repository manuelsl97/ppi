<?php 
$query_DatosConsultaCategorias = sprintf("SELECT * FROM tblcategoria WHERE refPadre=0 AND intEstado=1 ORDER BY intOrden ASC");

$DatosConsultaCategorias = mysqli_query($con,  $query_DatosConsultaCategorias) or die(mysqli_error($con));
$row_DatosConsultaCategorias = mysqli_fetch_assoc($DatosConsultaCategorias);
$totalRows_DatosConsultaCategorias = mysqli_num_rows($DatosConsultaCategorias);
?>
<div class="left-sidebar">
	<h2>Categorías</h2>
	<div class="panel-group category-products" id="accordian"><!--category-productsr-->

	<?php 
		$solapa="apertura";
		$contador=1;
			do { 
				$solapaapertura=$solapa.$contador;
		?>
		<div class="panel panel-default">
		<?php if (TieneSubcategorias($row_DatosConsultaCategorias["idCategoria"]))
		{?>
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordian" href="#<?php echo $solapaapertura;?>">
						<span class="badge pull-right"><i class="fa fa-plus"></i></span>
						<?php echo $row_DatosConsultaCategorias["strNombre"];?>
					</a>
				</h4>
			</div>
			<div id="<?php echo $solapaapertura;?>" class="panel-collapse collapse">
				<div class="panel-body">
					<ul>
					<?php MostrarSubcategorias($row_DatosConsultaCategorias["idCategoria"]);?>
					</ul>
				</div>
			</div>
		
		<?php }
		else
		{?>
		<div class="panel-heading">
				<h4 class="panel-title">
					<a  href="categoria.php?id=<?php echo $row_DatosConsultaCategorias["idCategoria"];?>">
						
						<?php echo $row_DatosConsultaCategorias["strNombre"];?>
					</a>
				</h4>
			</div>
		
		<?php }?></div>
<?php  
			$contador=$contador+1;
			} while ($row_DatosConsultaCategorias = mysqli_fetch_assoc($DatosConsultaCategorias)); ?>
						</div><!--/category-products-->
					
					
					
					<?php 
$query_DatosConsultaMarcas = sprintf("SELECT * FROM tblmarca WHERE intEstado=1 ORDER BY intOrden ASC");

$DatosConsultaMarcas = mysqli_query($con,  $query_DatosConsultaMarcas) or die(mysqli_error($con));
$row_DatosConsultaMarcas = mysqli_fetch_assoc($DatosConsultaMarcas);
$totalRows_DatosConsultaMarcas = mysqli_num_rows($DatosConsultaMarcas);
?>
					
<?php if (_marcas==1){?>
						<div class="brands_products"><!--brands_products-->
							<h2>Marcas</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
								<?php 
			do { 
				?>
									<li><a href="#"> <span class="pull-right">(xxx)</span><?php echo $row_DatosConsultaMarcas["strMarca"];?></a></li>
									
		<?php  
			
			} while ($row_DatosConsultaMarcas = mysqli_fetch_assoc($DatosConsultaMarcas)); ?>
									
								</ul>
							</div>
						</div><!--/brands_products-->
						<?php }?>
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>