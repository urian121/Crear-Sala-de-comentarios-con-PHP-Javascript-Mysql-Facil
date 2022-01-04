<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    date_default_timezone_set("America/Bogota");
	$dateCreateCow   = date('d-m-Y H:i:s A', time()); 
	$nameUser 		 = filter_var($_REQUEST['nameUser'], FILTER_SANITIZE_STRING);

	$filename        = $_FILES['photoUser']['name'];
	$sourceFoto      = $_FILES['photoUser']['tmp_name'];

	//cambiando nombre a la foto
	$newNameFoto    = trim($nameUser);
	$explode        = explode('.', $filename);
	$extension_foto = array_pop($explode);
	$nuevoNameFoto  = $newNameFoto.'.'.$extension_foto;
	
	$directorio = "fotosUsers/";

	if (!file_exists($directorio)) {
		mkdir($directorio, 0777, true);
	}
	$dir = opendir($directorio);

	$target_path = $directorio.'/'.$nuevoNameFoto;
    if(move_uploaded_file($sourceFoto, $target_path)) {
    
		//IMPORTANTE: Creando la COOKIE del usuario nuevo que se acaba de registrar
		$miCookies = "user-presente";
		setcookie("$miCookies", $nameUser, time() + (43200)); //86400 = 1 dia y 43200 = 12 horas
	
		$miCookies = "user-presente-photo";
		setcookie("$miCookies", $nuevoNameFoto, time() + (43200));
   }

   header('Location: ./');

}
?>