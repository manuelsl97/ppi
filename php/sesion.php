<?php
    include("../Connections/conexion.php");
	$email=$_POST["email"];
	$passwd=$_POST["pass"];
	$quuery= "SELECT * from usuarios where email = '$email'" ;
	$r= mysqli_query($con,$quuery);
	if($row=mysqli_fetch_array($r)){
        if($row['password']==$passwd){
            session_start();
            $_SESSION['uid']=$row['u_id'];
            $_SESSION['uname']=$row['u_nombre'];
            header("location:../index.php");
        }
    }												
?>