<?php

    include "Classes/Car.php";

    $response = array(
        "status" => "failed"
    );

    if(isset($_POST['id'])){

        $id = $_POST['id'];
        
        $cars_manager = new CarsManager();

        $response['status'] = $cars_manager->deleteCar($id);
    }

  echo json_encode($response);


?>
