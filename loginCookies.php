<?php
/*
ini_set('display_errors', 1);
error_reporting(E_ALL);
*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	date_default_timezone_set("America/Bogota");
	$dateCreateCow   = date('d-m-Y H:i:s A', time());
	$nameUser 		 = trim($_REQUEST['nameUser']);
	$filename        = $_FILES['photoUser']['name'];
	$sourceFoto      = $_FILES['photoUser']['tmp_name'];


	$logitudName    = 10;
	$StringName     = substr(md5(microtime()), 1, $logitudName);

	$newNameFoto    = trim($nameUser . $StringName); //quitando espacios en blaco y concatenando un string al nombre del usuario
	$explode        = explode('.', $filename);
	$extension_foto = array_pop($explode);
	$nuevoNameFoto  = $newNameFoto . '.' . $extension_foto;

	$directorio = "fotosUsers/";

	if (!file_exists($directorio)) {
		mkdir($directorio, 0777, true);
	}
	$dir = opendir($directorio);

	$target_path = $directorio . '/' . $nuevoNameFoto;
	if (move_uploaded_file($sourceFoto, $target_path)) {

		//IMPORTANTE: Creando la COOKIE del usuario nuevo que se acaba de registrar
		$miCookies = "user_presente";
		setcookie("$miCookies", $nameUser, time() + (43200)); //86400 = 1 dia y 43200 = 12 horas

		$miCookies = "user_presente_photo";
		setcookie("$miCookies", $nuevoNameFoto, time() + (43200));
	}

	header('Location: ./');
}
