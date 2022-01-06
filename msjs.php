<?php
include('config.php');
$sqlMsjs = ("SELECT * FROM salacomentarios ORDER BY id ASC");
$querySqlMsjs = mysqli_query($con, $sqlMsjs);


while ($dataMsjs = mysqli_fetch_array($querySqlMsjs)) {
  if ($dataMsjs["id"]%2==0){  ?>
  <div class="text">
    <div class="profile-pic">
       <img src="./fotosUsers/<?php echo $dataMsjs["user_presente_photo"]; ?>" alt=""> </div>
       <div class="text-content">
         <h5><?php echo ucwords($dataMsjs["user_presente"]); ?></h5>
         <?php echo $dataMsjs["msjUser"]; ?>
      <span class="timestamp"><?php echo $dataMsjs["HoursMsjs"]; ?></span>
    </div>
  </div>
<?php }else{ ?>
  <div class="text sent">
    <div class="profile-pic">
    <img src="./fotosUsers/<?php echo $dataMsjs["user_presente_photo"]; ?>" alt=""> </div>
    <div class="text-content">
      <h5><?php echo ucwords($dataMsjs["user_presente"]); ?></h5>
       <?php echo $dataMsjs["msjUser"]; ?>
      <span class="timestamp"><?php echo $dataMsjs["dateMsjs"]; ?></span>
    </div>
  </div>
<?php } 
} ?>
