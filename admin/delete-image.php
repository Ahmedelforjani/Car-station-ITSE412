<?php
  include "../DB_Connect.php";

  //check if i got post request
  if(isset($_POST)) {
    //check if i got image in post
    if(isset($_POST['image_id'])) {
      $id = $_POST['image_id'];
      $queryy = "DELETE FROM `slide` WHERE `slide`.`id` = :id";
      $sqll = $con->prepare($queryy);
      $sqll->bindParam(':id', $id);
      $sqll->execute();
      echo $_POST['image_id'] . ' is deleted';
    }
  }


?>
