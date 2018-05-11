<?php ini_set('display_errors', '1');
require_once('../Connections/conexion.php'); ?><?php
//MySQLi Fragmentos por http://www.dreamweaver-tutoriales.com
//Copyright Jorge Vila 2015
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

function mysqli_result($res, $row, $field=0) { 
    $res->data_seek($row); 
    $datarow = $res->fetch_array(); 
    return $datarow[$field]; 
}

if (isset($_POST['strEmail'])) {
  $loginUsername=$_POST['strEmail'];
  //ATENCIÓN USAMOS MD5 para guardar la contraseña.
  $password=md5($_POST['strPassword']);
  $MM_fldUserAuthorization = "intNivel";
  $MM_redirectLoginSuccess = "inicio.php";
  $MM_redirectLoginFailed = "index.php?error=1";
  $MM_redirecttoReferrer = false;
  
  	
  $LoginRS__query=sprintf("SELECT idUsuario, strEmail, strPassword, intNivel FROM tblusuario WHERE strEmail=%s AND strPassword=%s AND intEstado=1",
  GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysqli_query($con,  $LoginRS__query) or die(mysqli_error($con));
  $loginFoundUser = mysqli_num_rows($LoginRS);
  if (($loginFoundUser) && (mysqli_result($LoginRS,0,'intNivel')!=0)) {
    
    $loginStrGroup  = mysqli_result($LoginRS,0,'intNivel');
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	 
    $_SESSION['tienda2017_UserId'] = mysqli_result($LoginRS,0,'idUsuario');
    $_SESSION['tienda2017_Mail'] = mysqli_result($LoginRS,0,'strEmail');
    $_SESSION['tienda2017_Nivel'] = mysqli_result($LoginRS,0,'intNivel');
	  
	  
	//ContabilizarAcceso($_SESSION['tienda2017_UserId']);
	
	/* DESCOMENTAR SOLO SI SE USA EL CHECK DE RECORDAR CONTRASEÑA, HABRÁ QUE USAR LA FUNCIÓN generar_cookie()
	if ((isset($_POST["CAMPORECUERDA"])) && ($_POST["CAMPORECUERDA"]=="1"))
	generar_cookie($_SESSION['NOMBREWEB_UserId']);
	*/	     

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
	
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>