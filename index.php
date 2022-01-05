<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="imgs/icon.png">
    <title>Sala de Comentarios</title>
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylemodal.css">
    <link rel="stylesheet" href="css/picnic.min.css">
  <style>
    .profile {
    border-radius: 50%;     /* Make it a circle */
    padding-bottom: 100%;   /* 100% height (ratio 1) */
  }
  </style>
  </head>
<body>
    
<?php
//si exite la varible $_COOKIE['user-presente'] no mostramos el formulario
if(!isset($_COOKIE['user_presente'])){ 
  include('modal-Inicio.php'); 
}?>

    <div class="chat">
        <div class="chat-texts">
            <?php include('msjs.php'); ?>
        </div>
      

        <div class="send-message">
          <div class="message-text">
          
      
          <!--<div class="smiley"><i class="lni lni-smile"></i></div>-->
          <form  class="formSend" name="formSend" id="formSend" action="" method="post">
            <input type="text" name="msjUser" id="msjUser" placeholder="Escribe tu mensaje aqui" autofocus>
          </form>
          <!-- <div class="attachment"><i class="lni lni-upload"></i></div> -->

          </div>
          <button type="submit" name="btnSend" id="btnSend">
            <i class="lni lni-arrow-right-circle"></i>
          </button>

        </div>
      
<audio class="audio" style="display:none;">
  <source src="tono-msj.mp3" type="audio/mp3">
</audio>

    </div>

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <script src="js/scriptChat.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
  [].forEach.call(document.querySelectorAll('.dropimage'), function(img){
    img.onchange = function(e){
      var inputfile = this, reader = new FileReader();
      reader.onloadend = function(){
        inputfile.style['background-image'] = 'url('+reader.result+')';
      }
      reader.readAsDataURL(e.target.files[0]);
    }
  });
});
  </script>
</body>
</html>