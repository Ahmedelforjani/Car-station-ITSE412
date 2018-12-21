<?php

  //check if i got post request
  if(isset($_POST)) {
    //check if i got image in post
    if(isset($_POST['image_id'])) {
      echo $_POST['image_id'] . ' is deleted';
    }
  }

?>
