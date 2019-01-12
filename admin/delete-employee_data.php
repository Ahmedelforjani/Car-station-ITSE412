<?php

  include "Classes/Employee.php";

  $status = array(
    "message" => "failed"
  );

  //check if i got the post request
  if(isset($_POST['id'])) {


   

    $employee_id = $_POST['id'];
    $employeemanager = new employeeManager();
    

    $status['message'] = $employeemanager->deleteEmployee($employee_id);

  }

  echo json_encode($status);


?>
