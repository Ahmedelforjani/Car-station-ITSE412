<?php
  include "../DB_Connect.php";
  // print_r($_FILES['images']);

  if(isset($_FILES['images'])) {
    $image = $_FILES['images'];

    if( !empty($image['name']) ) {
      $imageName = rand(0, 100000) . "_" . $image['name'];
      move_uploaded_file($image['tmp_name'], "images/Slider/" . $imageName);

      $query = "INSERT INTO slide(img) VALUES(:img_url)";

      $stmt = $con-> prepare($query);
      $stmt->bindParam(':img_url', $imageName);
        if($stmt->execute()) {
          echo "succes";
        } else {
          echo "failed";
        }

    } else {
      $imageName = "default.png";
    }
  }
?>
