<?php

  include "Classes/Employee.php";

  $status = array(
    "message" => "failed"
  );

  //check if i got the post request
  if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['jobTitle']) &&
  isset($_POST['email']) && isset($_POST['phone']) && isset($_FILES['employee_image'])){

        $name = $_POST['name'];
        $jobTitle = $_POST['jobTitle'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $id = $_POST['id'];
    
        if(!empty($_FILES['employee_image']['name'])) {
          $employee_image       = $_FILES['employee_image'];
          //generate image name
          $imageName = rand(0, 100000) . "_" . str_replace(" ", "_", $employee_name) . ".png";
          move_uploaded_file($employee_image['tmp_name'], "images/" . $imageName);
        
        }


    $employee_manager = new employeeManager();

    
    $employee = array(
        "name" => $name,
        "jobTitle" => $jobTitle,
        "email" => $email,
        "phone" => $phone,
        "id" => $id
      );

      if(!empty($_FILES['employee_image']['name'])) {
        $employee['image'] = $imageName;
      }
      
      $status['message'] = $employee_manager->updateEmployee($employee);

  }

  echo json_encode($status);


?>