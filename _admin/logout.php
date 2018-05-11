<?php 

$_SESSION['MM_Username']="";
$_SESSION['MM_UserGroup']="";
$_SESSION['tienda2017_UserId']="";
$_SESSION['tienda2017_Mail']="";
$_SESSION['tienda2017_Nivel']="";
unset($_SESSION['MM_Username']);
unset($_SESSION['MM_UserGroup']);
unset($_SESSION['tienda2017_UserId']);
unset($_SESSION['tienda2017_Mail']);
unset($_SESSION['tienda2017_Nivel']);

header("Location: index.php");
?>