<?php
include('config.php');
$sqlMsjs = ("SELECT * FROM salacomentarios ORDER BY id ASC");
$querySqlMsjs = mysqli_query($con, $sqlMsjs);


while ($dataMsjs = mysqli_fetch_array($querySqlMsjs)) {
  if ($dataMsjs["id"]%2==0){  ?>
  <div class="text">
    <div class="profile-pic"> <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt=""> </div>
    <div class="text-content">
      <h5>Joannie</h5>
      <?php echo $dataMsjs["msjUser"]; ?>
      <span class="timestamp">12:00hrs</span>
    </div>
  </div>
<?php }else{ ?>
  <div class="text sent">
    <div class="profile-pic"><img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt=""></div>
    <div class="text-content">
      <h5>Laurie</h5>
       <?php echo $dataMsjs["msjUser"]; ?>
      <span class="timestamp">12:00hrs</span>
    </div>
  </div>
<?php } 
} ?>

<div style="display:none;">
  <audio controls autoplay>
      <source src="tono-msj.mp3" type="audio/mp3">
  </audio>
</div>