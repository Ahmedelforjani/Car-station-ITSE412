<?php

  include "Classes/Employee.php";

  $status = array(
    "message" => "failed"
  );

  //check if i got the post request
  if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['jobTitle']) &&
  isset($_POST['email']) && isset($_POST['phone'])){

        $name = $_POST['name'];
        $jobTitle = $_POST['jobTitle'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $id = $_POST['id'];
    



    $employee_manager = new employeeManager();

    
    $employee = array(
        "name" => $name,
        "jobTitle" => $jobTitle,
        "email" => $email,
        "phone" => $phone,
        "id" => $id
      );


      $status['message'] = $employee_manager->updateEmployee($employee);

  }

  echo json_encode($status);


?>