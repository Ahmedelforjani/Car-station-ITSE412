<?php

  include "../DB_Connect.php";

  $response = array(
    "cat_name" => "",
    "cat_desc" => "",
    "cat_image" => ""
  );

  if(isset($_POST['id'])) {
    $id = $_POST['id'];

    global $con;

    $query = "SELECT * FROM categories WHERE id = :id";
    $stmt = $con->prepare($query);

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    if( $stmt->rowCount() > 0 ) {
      $result = $stmt->fetch();
      $response['cat_name'] = $result['name'];
      $response['cat_desc'] = $result['description'];
      $response['cat_image'] = $result['img'];
    }
  }

  echo json_encode($response);


?>
