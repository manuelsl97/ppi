<?php
session_start();
    if (!empty($_SESSION['uname'])) {
        echo'
        <li><a href="php/info.php"><i class="fa fa-user"></i>'.$_SESSION["uname"].'</a></li>
        <li><a href="php/checkout.php"><i class="fa fa-crosshairs"></i> checkout</a></li>
        <li><a href="php/cart.php"><i class="fa fa-shopping-cart"></i> Carrito</a></li>
        <li><a href="php/logout.php"><i class="fa fa-lock"></i> Logout</a></li>
        ';
    }else {
        echo'
            
            <li><a href="php/login.php" ><i class="fa fa-lock"></i> Login</a></li>
            ';
    }
?>