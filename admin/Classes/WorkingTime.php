<?php
include "../DB_Connect.php";
 

  class WorkingTime {

    private $id, $day, $start_hour, $close_hour;

    public function __construct($id){
      //get time data from database based on id of the day
      //
      //
      global $con;
      $this->id = $id;
      $query = "SELECT * FROM work_time where id= :id ";
      $stmt = $con->prepare($query);
      $stmt->bindParam(":id", $id);
      $stmt->execute();
  
      $result = $stmt->fetch();

      
      $this->start_hour = $result['start_h']; // time from database
      $this->close_hour = $result['close_h']; // time from database
     

    }


    public function updateWorkingTime($fromTime, $toTime) {
      // update workingtime Table in the database
      global $con;

      
      $query = "UPDATE work_time set start_h= :start_hour ,close_h= :close_hour where id =:id";

      $stmt = $con->prepare($query);
      $stmt->bindParam(':start_hour', $fromTime);
      $stmt->bindParam(':close_hour', $toTime);
      $stmt->bindParam(':id', $this->id);

      $this->start_hour = $fromTime;
      $this->close_hour = $toTime;
      $stmt->execute();
      
    }

    public function getId(){
      return $this->id;
    }

    public function getDay(){
      return $this->day;
    }

    public function getStartHour(){
      return $this->start_hour;
    }

    public function getCloseHour(){
      return $this->close_hour;
    }

  }

?>
