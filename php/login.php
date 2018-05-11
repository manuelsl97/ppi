<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | E-Shopper</title>
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
								<li><a href="../index.php" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="../index.php" class="active">Products</a></li>
										<li><a href="checkout.php">Checkout</a></li> 
										<li><a href="cart.php">Cart</a></li> 
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
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>ya tienes cuenta?, entra</h2>
						<form action="sesion.php" method="POST">
							<input type="email" placeholder="Email Address"  class="form-control" required="required" name="email"/>
							<input type="password" placeholder="passwd"  class="form-control" required="required" name="pass"/>
							<span>
								
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						</form>

					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">o</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Registrate!</h2>
						<form action="registro.php" method="POST">
							<input type="text" placeholder="Nombre" class="form-control" required="required" name="nombre"/>
							<input type="text" placeholder="Apellidos" class="form-control" required="required" name="apellido"/>
							<input type="date" placeholder="Fecha de Nacimiento" class="form-control" required="required" name="fecha"/>
							<input type="email" placeholder="Email" class="form-control" required="required" name="email"/>
							<input type="text" placeholder="Direccion" class="form-control" required="required" name="dir"/>
							<input type="text" placeholder="Ciudad" class="form-control" required="required" name="cd"/>
							<input type="text" placeholder="Colonia" class="form-control" required="required" name="col"/>
							<input type="text" placeholder="Estado" class="form-control" required="required" name="edo"/>
							<input type="text" placeholder="C.P." class="form-control" required="required" name="cp"/>
							<input type="text" placeholder="Pais" class="form-control" required="required" name="pais"/>
							<input type="text" placeholder="Tarjeta" class="form-control" required="required" name="tarjeta"/>
							<input type="password" placeholder="Password"class="form-control" required="required" name="pwd"/>
							<button type="submit" class="btn btn-default">Signup</button>
						
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
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
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>