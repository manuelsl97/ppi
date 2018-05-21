<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

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
            $_SESSION['apellidos']=$row['u_apellidos'];
            $_SESSION['fecha']=$row['fecha'];
            $_SESSION['email']=$row['email'];
            $_SESSION['addr']=$row['direccion'];
            $_SESSION['cd']=$row['ciudad'];
            $_SESSION['colonia']=$row['colonia'];
            $_SESSION['estado']=$row['estado'];
            $_SESSION['cp']=$row['codpos'];
            $_SESSION['pais']=$row['pais'];
            $_SESSION['numtarjeta']=$row['numtarjeta'];
            $_SESSION['password']=$row['password'];
            header("location:../index.php");
        }
        else{
            header("location:login.php");
           echo' <div class="alert alert-danger">
            <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
          </div>';
        }
    }												
?>
</body>
</html>