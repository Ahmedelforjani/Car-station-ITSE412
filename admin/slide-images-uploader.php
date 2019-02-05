<?php

  $result = array(
    "message" => "error",
    "image" => "",
    "id" => ""
  );

  include "../DB_Connect.php";
  // print_r($_FILES['images']);

  if(isset($_FILES['images'])) {
    $image = $_FILES['images'];
    $imageName = "";

    if( !empty($image['name']) ) {
      $imageName = rand(0, 100000) . "_" . $image['name'];
      move_uploaded_file($image['tmp_name'], "images/Slider/" . $imageName);

    } else {
      $imageName = "default.png";
    }

    $result['image'] = $imageName;

    $query = "INSERT INTO slide(img) VALUES(:img_url)";

    $stmt = $con-> prepare($query);
    $stmt->bindParam(':img_url', $imageName);
    if($stmt->execute()) {
      $result['message'] = "succes";
    } else {
      $result['message'] = "failed";
    }

    $result['id'] = $con->lastInsertId();
  }

  echo json_encode($result);
?>
