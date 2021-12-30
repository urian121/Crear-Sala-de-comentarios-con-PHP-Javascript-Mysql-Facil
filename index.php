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
</head>
<body>
    
    <div class="chat">
        <div class="chat-texts">
          <!--<div id="msjs" style="border: 1px solid red;">-->
            <?php include('msjs.php'); ?>
          <!--</div>-->
        </div>
      


        <div class="send-message">
          <div class="message-text">
          
          <!--<div class="smiley"><i class="lni lni-smile"></i></div>-->
          <form  class="formSend" name="formSend" id="formSend" action="" method="post">
            <input type="text" name="msjUser" id="msjUser" placeholder="Escribe tu mensaje aqui" autofocus>
          </form>
          <!-- <div class="attachment"><i class="lni lni-upload"></i></div> -->
          </div>
          <button type="submit" name="btnSend" id="btnSend"><i class="lni lni-arrow-right-circle"></i></button>
        </div>
      
      
    </div>

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <script src="js/scriptChat.js"></script>
</body>
</html>