<?php
//$fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true

if (!isset($_FILES["file1"])) { // no se ha seleccionado fichero
    echo "ERROR: Selecciona un fichero antes de pulsar el botón de subir";
    exit();
}

$fileName = $_FILES["file1"]["name"]; // Nombre de fichero
$fileTmpLoc = $_FILES["file1"]["tmp_name"]; // Fichero en la carpeta TMP
$fileType = $_FILES["file1"]["type"]; // Tipo de fichero



if (file_exists($_POST["a3"].$fileName)) { // Fichero repetido
    echo "ERROR: Ya existe un fichero con ese nombre";
    exit();
}

//Comprobación Extensión 
$ext = pathinfo($fileName);
$extensionfichero = $ext['extension'];
if ($_POST["a8"]!="0")
{
	$pos=strpos($_POST["a8"], $extensionfichero);
	if ($pos === false) {
		echo "ERROR: Extensión de archivo no permitida.";
		exit();
	}
}

//Comprobación Espacios vacios 
if (strpos($fileName, " "))
{
		echo "ERROR: El nombre del fichero no debe llevar espacios.";
		exit();
}



//Comprobación tamaño fichero
if ($_POST["a7"]!="0")
{
	$fileSize = $_FILES["file1"]["size"]; // File size in bytes
	if ($fileSize>$_POST["a7"])
	{
		echo "ERROR: El tamaño del fichero es demasiado grande";
		exit();
	}
}


//Comprobación Ancho Fichero ****
if ($_POST["a9"]!="0")
{
	$data = getimagesize($fileTmpLoc);
	$width = $data[0];
	$height = $data[1];
	if ($width>$_POST["a9"])
	{
		echo "ERROR: El ancho del fichero es demasiado grande";
		exit();
	}
}

//Comprobación Alto Fichero ****
if ($_POST["a10"]!="0")
{
	$data = getimagesize($fileTmpLoc);
	$width = $data[0];
	$height = $data[1];
	if ($height>$_POST["a10"])
	{
		echo "ERROR: El alto del fichero es demasiado grande";
		exit();
	}
}

//Copiamos ya el fichero al server
if(move_uploaded_file($fileTmpLoc, $_POST["a3"].$fileName)){
    echo $fileName;

} else {
    echo "ERROR: Fallo en la carga. Revisa los permisos de la carpeta destino.";
}
?>