<?php
   $con = mysqli_connect("localhost","root","suadmin","mydb");
   mysqli_set_charset($con, 'utf8');
   if (mysqli_connect_errno()) {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
    $name=mysqli_real_escape_string($con, $_POST['nombre']);
    $apellidos = mysqli_real_escape_string($con, $_POST['apellido']);
    $fecha = mysqli_real_escape_string($con, $_POST['fecha']);
    $email= mysqli_real_escape_string($con, $_POST['email']);
    $dir= mysqli_real_escape_string($con, $_POST['dir']);
    $cd = mysqli_real_escape_string($con, $_POST['cd']);
    $col= mysqli_real_escape_string($con, $_POST['col']);
    $edo = mysqli_real_escape_string($con, $_POST['edo']);
    $cp = mysqli_real_escape_string($con, $_POST['cp']);
    $pais = mysqli_real_escape_string($con, $_POST['pais']);
    $tarjeta = mysqli_real_escape_string($con, $_POST['tarjeta']);
    $pwd = mysqli_real_escape_string($con, $_POST['pwd']); 
    $sql="INSERT INTO usuarios (u_nombre, u_apellidos, fecha,email,direccion,ciudad,colonia,estado,codpos,pais,numtarjeta,password) VALUES ('$name', '$apellidos', '$fecha', '$email','$dir','$cd','$col','$edo','$cp','$pais','$tarjeta','$pwd');";
    mysqli_query($con,$sql); 
    echo "se armo";
?>