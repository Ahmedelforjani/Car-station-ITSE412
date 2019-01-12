<?php

include "../DB_Connect.php";

class employee {

  private $_id, $_name, $_jobTitle, $_email, $_phone, $_img;

  public function __construct($id) {
    //get the employee data from the db
    $this->_id = $id;
    global $con;

    $query = "SELECT * FROM employee WHERE id = :id";
    $stmt = $con->prepare($query);

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    if( $stmt->rowCount() > 0 ) {
      $result = $stmt->fetch();
      $this->_name = $result['name'];
      $this->_jobTitle = $result['job_title'];
      $this->_email = $result['email'];
      $this->_phone = $result['phone'];
      $this->_img = $result['img'];
    }

  }

  public function getEmployeeId() {
    return $this->_id;
  }

  public function getEmployeeName() {
    return $this->_name;
  }

  public function getEmployeeJobTitle() {
    return $this->_jobTitle;
  }

  public function getEmployeeEmail() {
    return $this->_email;
  }

  public function getEmployeePhone() {
    return $this->_phone;
  }

  public function getEmployeeImg() {
    return $this->_img;
  }
}


class employeeManager {
// DB connection 

      private $_employee = array();

      public function getEmployeeInTable() {

        $table = "";
        foreach($this->_employee as $employee){
          $table .= '<tr data-id="'.$employee->getEmployeeId().'">
                  <td>'.$employee->getEmployeeName().'</td>
                  <td>'.$employee->getEmployeeJobTitle().'</td>
                  <td>'.$employee->getEmployeeEmail().'</td>
                  <td>'.$employee->getEmployeePhone().'</td>
                  <td>'.$employee->getEmployeeImg().'</td>
                  <td>                 
                          <Button data-toggle="modal" data-id="'.$employee->getEmployeeId().'" data-target="#editemployee" class="editBtn btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Edit">
                              <i class="la la-edit"></i>
                          </Button>
                          <Button data-id="'.$employee->getEmployeeId().'" class="deleteBtn btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">
                                <i class="la la-trash"></i>
                          </Button> 
                      </td>
                  </tr>';
        }

        return $table;
      }


      public function loadEmployees() {
        global $con;
  
        $query = "SELECT id FROM employee";
        $stmt = $con->prepare($query);
  
        $stmt->execute();
  
        if( $stmt->rowCount() > 0 ) {
          $result = $stmt->fetchAll();
          $this->_employee = array();
  
          foreach ($result as $row) {
            $this->_employee[] = new employee($row['id']);
          }
        }
      }


    public function addNewEmployee($employee) {
      global $con;

      $query = "INSERT INTO employee(name, job_title, email, phone, img) VALUES(:emp_name, :emp_job, :emp_email, :emp_phone, :emp_img)";

      $stmt = $con->prepare($query);
      $stmt->bindParam(':emp_name', $employee['name']);
      $stmt->bindParam(':emp_job', $employee['jobTitle']);
      $stmt->bindParam(':emp_email', $employee['email']);
      $stmt->bindParam(':emp_phone', $employee['phone']);
      $stmt->bindParam(':emp_img', $employee['img']);
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

    public function updateEmployee($employee) {
      global $con;

      
        $query = "UPDATE employee SET name = :employee_name, job_title = :jobtitle, email = :email, phone = :phone, img = :img WHERE id = :id";
    


      $stmt = $con->prepare($query);
      $stmt->bindParam(':employee_name', $employee['name']);
      $stmt->bindParam(':jobtitle', $employee['jobTitle']);
      $stmt->bindParam(':email', $employee['email']);
      $stmt->bindParam(':phone', $employee['phone']);
      $stmt->bindParam(':id', $employee['id']);
      $stmt->bindParam(':emp_img', $employee['img']);

      try{
        if($stmt->execute()) {
          return "success";
        } else {
          return "failed";
        }
      } catch(Exception $ex) {
        return "failed";
      }

    }

    public function deleteEmployee($employee_id) {
      global $con;

      $query = "DELETE FROM employee WHERE id = :id";
      $stmt = $con->prepare($query);
      $stmt->bindParam(':id', $employee_id);

      try{
        $stmt->execute();
        if($stmt->rowCount() > 0) {
          return "success";
        } else {
          return "failed";
        }
      } catch(Exception $ex) {
        return "failed";
      }


    }

    public function getAllEmployees() {
      return $this->_employee;
    }
  }

?>