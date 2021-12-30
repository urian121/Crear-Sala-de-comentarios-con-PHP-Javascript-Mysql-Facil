<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include('config.php');
  $de               = "Urian";

  date_default_timezone_set("America/Bogota" ) ;
  $hora             = date('h:i a',time() - 3600*date('I'));
  $fecha            = date("d/m/Y");
  $dateMsjs         = $fecha." ".$hora;

  //Usando filter_var para limpiar el campo de msjUser
$msjUser   = filter_var($_POST['msjUser'], FILTER_SANITIZE_STRING);
//validando que el campo msjUser no este vacio
if(strlen($msjUser)>0){
    $NuevoMsj  = ("INSERT INTO salacomentarios (de, msjUser, dateMsjs, HoursMsjs) VALUES ('$de', '$msjUser', '$dateMsjs', '$hora')");
    $queryInsert = mysqli_query($con, $NuevoMsj);
    
  }

}
?>
