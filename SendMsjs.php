<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include('config.php');

  date_default_timezone_set("America/Bogota");
  $hora             = date('h:i a', time() - 3600 * date('I'));
  $fecha            = date("d/m/Y");
  $dateMsjs         = $fecha . " " . $hora;

  //Usando filter_var para limpiar el campo de msjUser
  $msjUser   = trim($_POST['msjUser']);
  //validando que el campo msjUser no este vacio
  if (strlen($msjUser) > 0) {

    if (isset($_COOKIE['user_presente']) && isset($_COOKIE['user_presente_photo'])) {
      $user_presente        = $_COOKIE['user_presente'];
      $user_presente_photo  = $_COOKIE['user_presente_photo'];


      $NuevoMsj  = ("INSERT INTO salacomentarios (user_presente, user_presente_photo, msjUser, dateMsjs, HoursMsjs) VALUES ('$user_presente', '$user_presente_photo', '$msjUser', '$dateMsjs', '$hora')");
      $queryInsert = mysqli_query($con, $NuevoMsj);
    }
  }
}
