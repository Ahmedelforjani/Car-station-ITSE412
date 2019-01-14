

<?php

        
        include "Classes/Employee.php";

        //check if i got the post request
        $status = array(
          "message" => "failed"
        );
        
        
        

        if(isset($_POST['name']) && isset($_POST['jobTitle']) &&
         isset($_POST['email']) && isset($_POST['phone'])) {

        $name = $_POST['name'];
        $jobTitle = $_POST['jobTitle'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];


        
        
        $employee_manager = new employeeManager();
        $employee = array(
          "name" => $name,
          "jobTitle" => $jobTitle,
          "email" => $email,
          "phone" => $phone
        );
        $status['message'] = $employee_manager->addNewEmployee($employee);
        
        
        
    
}
echo json_encode($status);
?>