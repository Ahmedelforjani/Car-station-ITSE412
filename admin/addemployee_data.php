

<?php

        
        include "Classes/Employee.php";

     
        $status = array(
          "message" => "Failed"
        );
        
        
        //check if i got the post request
        if(isset($_POST['email']) && isset($_POST['phone'])
        && isset($_FILES['employee_image']) && !empty($_FILES['employee_image']['name'])){

        
        $name = $_POST['name'];
        $jobTitle = $_POST['jobTitle'];
        $email = $_POST['email'];
        $phone =  $_POST['phone'];
        $employee_image =   $_FILES['employee_image'];


        $imageName = rand(0, 100000) . "_" . str_replace(" ", "_", $name) . ".png";
        move_uploaded_file($employee_image['tmp_name'], "images/" . $imageName);
  
        
        $employee_manager = new employeeManager();
        $employee = array(
          "name" => $name,
          "jobTitle" => $jobTitle,
          "email" => $email,
          "phone" => $phone,
          "img" => $imageName

        );
        $status['message'] = $employee_manager->addNewEmployee($employee);
        
        $status['id'] = $con->lastInsertId();
        
    
}
echo json_encode($status);
?>