<?php

  class WorkingTime {

    private $id, $day, $start_hour, $close_hour;

    public function __construct($id){
      //get time data from database based on id of the day
      //
      //

      $this->id = $id;
      $this->start_hour = "09:00:00 AM"; // time from database
      $this->close_hour = "10:00:00 PM"; // time from database

      //for testing changing values
      if($id == '7') {
        $this->start_hour = "Closed";
        $this->close_hour = "8:00:00 PM";
      }
    }


    public function updateWorkingTime($fromTime, $toTime) {
      // update workingtime Table in the database

      $this->start_hour = $fromTime;
      $this->close_hour = $toTime;
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
