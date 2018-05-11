<?php
    /*session_start();
    if(isset($_SESSION['usuario'])){
        session_destroy();
    }*/
    session_start();
    session_destroy();
    header("location:../index.php");
   // header("location:../index.php");
?>