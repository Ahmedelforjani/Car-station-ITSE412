<?php

  include "../DB_Connect.php";

  $response = array();
  $response["status"] = "failed";

  if(isset($_POST['car_id'])) {

    $id = $_POST['car_id'];
    global $con;

    $query = "SELECT * FROM cars_image WHERE car_id = :id";
    $stmt = $con->prepare($query);

    $stmt->bindParam(":id", $id);

    $stmt->execute();
    if( $stmt->rowCount() > 0 ) {
        $result = $stmt->fetchAll();
        $i=0;
        foreach ($result as $row) {
          $response["images"][] = $row['img'];
          $i++;
        }
        $response["status"] = "success";
    }
  }
  echo json_encode($response);


?>
