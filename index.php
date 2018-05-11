<?php
    require "Connections/conexion.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <?php
    $query_DatosConsulta = sprintf("SELECT * FROM productos");
    $DatosConsulta = mysqli_query($con,  $query_DatosConsulta) or die(mysqli_error($con));
    $row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta);
    $totalRows_DatosConsulta = mysqli_num_rows($DatosConsulta);
    ?>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> +5215519396895</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> manuelsl97@icloud.com.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/BORNERGNI"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/borner_gni"><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href="https://www.instagram.com/manuelborner/?hl=es-la"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="https://plus.google.com/u/0/113370998249619991431"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" >
									Mexico
									<span class="caret"></span>
								</button>
								
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" >
									pesos
									<span class="caret"></span>
								</button>

							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="php/checkout.php"><i class="fa fa-user"></i> cuenta</a></li>
								
								<li><a href="php/checkout.php"><i class="fa fa-crosshairs"></i> checkout</a></li>
								<li><a href="php/cart.php"><i class="fa fa-shopping-cart"></i> Carrito</a></li>
								<li><a href="php/login.php" class="active"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="index.php" class="active">Products</a></li>
										<li><a href="php/checkout.php">Checkout</a></li> 
										<li><a href="php/cart.php">Cart</a></li> 
										<li><a href="php/login.php" >login</a></li> 
                                    </ul>
                                </li> 
								
								<li><a href="php/contact-us.php">contacto</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<h3>comprometidos contigo!</h3>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	
	<section>
	<div class="ping text-center"><!--shipping-->
						<h1>La mejor carne a tu alcance</h1>
							<img src="images/varios.png" alt="" />
						</div><!--/shipping-->				
	<div class="container">
			<div class="row">
				<div class="col-sm-3">
								
                        <?php
                        $productos=mysqli_query($con,"SELECT * FROM Persons;");
                        ?>
						
						
						
						
					</div>
				</div>
			
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Nuestros cortes</h2>
                       
                        
                        <?php 
		//AQUI ES DONDE SE SACAN LOS DATOS, SE COMPRUEBA QUE HAY RESULTADOS
		if ($totalRows_DatosConsulta > 0) {  
			 do { 
              		?>
              		<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<?php echo"<img src='./images/productos/". $row_DatosConsulta['p_foto']."' alt='' />"; ?>
											<h2>$<?php echo $row_DatosConsulta["precio"]; ?> mx</h2>
											<p><?php echo $row_DatosConsulta["p_nombre"]; ?></p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>agregar al carrito</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
                                                <h2>$<?php echo $row_DatosConsulta["precio"]; ?> mx</h2>
												<p><?php echo $row_DatosConsulta["p_nombre"]; ?></p>
												<p><?php echo $row_DatosConsulta["p_descripcion"]; ?></p>
												<p><?php echo $row_DatosConsulta["p_fabricante"]; ?></p>
												<p><?php echo $row_DatosConsulta["p_origen"]; ?></p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
								<div class="choose">
									
								</div>
							</div>
						</div>
              		
              		<?php
			  		 } while ($row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta)); 
		 } 
		else
		 { //MOSTRAR SI NO HAY RESULTADOS ?>
                No hay resultados.
                <?php } ?>
					
		
			
					
						
				</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>meat</span>-shop</h2>
							<p>la mejor forma de comprar carne</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 Meat-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>