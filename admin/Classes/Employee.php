<?php

include "../DB_Connect.php";
class employeeManager {
// DB connection 

    public function addNewEmployee($employee) {
      global $con;

      $query = "INSERT INTO employee(name, job_title, email, phone) VALUES(:emp_name, :emp_job, :emp_email, :emp_phone)";

      $stmt = $con->prepare($query);
      $stmt->bindParam(':emp_name', $employee['name']);
      $stmt->bindParam(':emp_job', $employee['jobTitle']);
      $stmt->bindParam(':emp_email', $employee['email']);
      $stmt->bindParam(':emp_phone', $employee['phone']);

      try{
        if($stmt->execute()) {
          return "success";
          
        } else {
          return "failed";
        }
      } catch(Exception $ex) {
        return $ex . "";
      }
    }


}
?>