<?php
session_start();
    if (!empty($_SESSION['uname'])) {
        echo'
        <li><a href="checkout.php"><i class="fa fa-user"></i>'.$_SESSION["uname"].'</a></li>
        <li><a href="checkout.php"><i class="fa fa-crosshairs"></i> checkout</a></li>
        <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Carrito</a></li>
        <li><a href="logout.php"><i class="fa fa-lock"></i> Logout</a></li>
        ';
    }else {
        echo'
            
            <li><a href="login.php" ><i class="fa fa-lock"></i> Login</a></li>
            ';
    }
?>