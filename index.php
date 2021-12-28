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
          <?php include('msjs.php'); ?>
        </div>
      
        <div class="send-message">
          <div class="message-text">
            <div class="smiley"><i class="lni lni-smile"></i></div>
            <input type="text" placeholder="Escribe tu mensajes aqui">
            <div class="attachment"><i class="lni lni-upload"></i></div>
          </div>
          <button><i class="lni lni-arrow-right-circle"></i></button>
        </div>
      
    </div>

      <script src="js/scriptChat.js"></script>
</body>
</html>