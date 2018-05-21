<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/price-range.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
	<link href="../css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">
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
							<a href="../index.php"><img src="../images/home/logo.png" alt="" /></a>
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
								<?php
									include("navbar.php");
								?>
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
								<li><a href="../index.php" >Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="../index.php">productos</a></li>
										<li><a href="checkout.php" >Checkout</a></li> 
										<li><a href="cart.php"class="active">carrito</a></li> 
										<li><a href="login.php" >login</a></li> 
                                    </ul>
                                </li> 
								
								<li><a href="contact-us.php">contacto</a></li>
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

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Producto</td>
							<td class="description"></td>
							<td class="price">Precio</td>
							<td class="quantity">Cantidad</td>
							<td class="total">Total</td>
							<td class="borrar">borrar</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php
							include("../Connections/conexion.php");
							error_reporting(0);	 
							$elu=$_SESSION['uid'];
							
							
								 $query_Car = mysqli_query($con,  "SELECT * FROM carrito where u_id='$elu'") or die(mysqli_error($con));
								 $pagar=0;
								
								while($row=$row_queryCar= mysqli_fetch_array($query_Car) ){
									$procid=$row['p_id'];
									$canti=$row['cantidad'];
									$idcar=$row['id_carrito'];
									$query_prod= mysqli_query($con,  "SELECT * FROM productos where id_productos='$procid'") or die(mysqli_error($con));
									$arre=mysqli_fetch_array($query_prod);
									
									//echo $arre['p_foto'];
									//img src='./images/productos/". $row_DatosConsulta['p_foto']."''.$arre['p_foto'].'
									
							
							
									echo'';
									echo '
										<td class="cart_product">
										<form action="cart.php" method="POST">
												<img src="../images/productos/'.$arre['p_foto'].'" width ="50%" heigth="100%"alt="">
											</td>
											<td class="cart_description">
											<h4><a href="">'.$arre['p_nombre'].'</a></h4>
											<p>'.$arre['p_descripcion'].'</p>
												
												
											</td>
											<td class="cart_price">
												<p>$ '.$arre['precio'].'</p>
											</td>
											<td class="cart_quantity">
												<div class="cart_quantity_button">
												
													
													<input  class="cart_quantity_input" type="text" d="cant" name="quantity" value="'.$canti.'" autocomplete="off" size="2" >

													
												</div>
											</td>
											<td class="cart_total">
												<p class="cart_total_price">$'.$arre['precio']*$canti.'</p>
											</td>
											<input   type="hidden"  name="id" value="'.$idcar.'" autocomplete="off" >
											
											<td class="borrar">
											<button type="submit" class="btn btn-default update">actualizar</button>
											</form>
											</td>
										</tr>
									';
									
									$pagar+=$arre['precio']*$canti;	
								}
								echo'';
								/*
								*/
							?>
							<?php
							error_reporting(0);
								$cant=$_POST["quantity"];
								$pid=$_POST["id"];
								
								
								if($cant==0){
									$delete_carrito=mysqli_query($con,"DELETE FROM carrito WHERE id_carrito='$pid'") or die(mysqli_error($con));
									header("location:cart.php");
								}
								else{
									$update_carrito=mysqli_query($con,"UPDATE carrito SET cantidad='$cant' WHERE id_carrito='$pid'") or die(mysqli_error($con));
									header("location:cart.php");
								}
								
							?>
							
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span><?php echo $pagar ?></span></li>
							<li>Eco Tax <span>$200</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>$ <?php echo $pagar+200 ?></span></li>
						</ul>
						
							<a class="btn btn-default check_out" href="checkout.php">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

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
					<p class="pull-left">Copyright © 2013 -Meat-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>