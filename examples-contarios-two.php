<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
  <title>Sala de comentarios</title>
  <style>
body {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #eee;
}
/*   
.media-body o p{
background-color: crimson;
padding: 20px;
border-radius: 0px 30px 30 px 30px;
color: #f9f9f9;
box-shadow: 0 8px 4px -4px rgb(230 230 230);
}
*/
.container {
  max-width: 600px;
  margin: 0 auto;
  padding: 1em 1.5em;
  background-color: #fff;
}

header > h2 {
  margin-bottom: 1.5rem;
  color: #555;
}

.media {
  margin-top: 0;
  padding: 1.8em 0;
  border-top: 1px solid #eee;
}

.media-image {
  height: 35vh;
  background-color: #eee;
}

.media-body {
  margin-top: 0;
}

.media-body h3 {
  margin-top: 1em;
  margin-bottom: .5em;
}

.media-body p {
  margin-top: 0;
  font-size: 0.875rem;
  line-height: 1.5;
  text-align: justify;
}

@media (min-width: 480px) {
  .media-image {
    float: left;
    width: 150px;
    height: 150px;
    margin-right: 1em;
  }
  
  .media-body {
    overflow: auto;
  }
  
  .media-body h3 {
    margin-top: 0;
  }
  
  .media-body p {
    font-size: 1rem;
  }
}

footer {
  margin-top: 1.5em;
  text-align: center;
  color: #555;
}
 </style>
</head>
<body>

  <?php
  include('config.php');
  $sqlMsjs = ("SELECT * FROM salacomentarios ORDER BY id ASC");
  $querySqlMsjs = mysqli_query($con, $sqlMsjs);
  ?>

  <div class="container">
  
    <header>
      <h2 style="text-align: center;">Lista de Comentarios</h2>
    </header>
    
    <div class="media">
      <div class="media-image">
      </div>
    <?php
      while ($dataMsjs = mysqli_fetch_array($querySqlMsjs)) { ?>
      <div class="media-body">
        <h3>Title</h3>
        <p>Aptent vel egestas vestibulum aliquam ullamcorper volutpat
    ullamcorper pharetra hac posuere a rhoncus purus molestie torquent. Scelerisque
    purus cursus dictum ornare a phasellus. A augue venenatis adipiscing.</p>
     </div>
     <?php } ?>
    </div>
    
    <div class="media">
      <div class="media-image"></div>
      <div class="media-body">
        <h3>Title</h3>
        <p>Aptent vel egestas vestibulum aliquam ullamcorper volutpat
    ullamcorper pharetra hac posuere a rhoncus purus molestie torquent. Scelerisque
    purus cursus dictum ornare a phasellus. A augue venenatis adipiscing.</p>
     </div>
    </div>
    
    <div class="media">
      <div class="media-image"></div>
      <div class="media-body">
        <h3>Title</h3>
        <p>Aptent vel egestas vestibulum aliquam ullamcorper volutpat
    ullamcorper pharetra hac posuere a rhoncus purus molestie torquent. Scelerisque
    purus cursus dictum ornare a phasellus. A augue venenatis adipiscing.</p>
     </div>
    </div>
    
    <div class="media">
      <div class="media-image"></div>
      <div class="media-body">
        <h3>Title</h3>
        <p>Aptent vel egestas vestibulum aliquam ullamcorper volutpat
    ullamcorper pharetra hac posuere a rhoncus purus molestie torquent. Scelerisque
    purus cursus dictum ornare a phasellus. A augue venenatis adipiscing.</p>
     </div>
    </div>
    
    <footer>
      <small>2019&copy;yosuahohoho</small>
    </footer>
    
  </div>
  
</body>
</html>