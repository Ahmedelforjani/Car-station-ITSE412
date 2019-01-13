<?php

  // print_r($_FILES['images']);

  if(isset($_FILES['images'])) {
    $image = $_FILES['images'];

    if( !empty($image['name']) ) {
      $imageName = rand(0, 100000) . "_" . $image['name'];
      move_uploaded_file($image['tmp_name'], "images/Slider/" . $imageName);
    } else {
      $imageName = "default.png";
    }
  }
?>
