<?php

  include "Classes/WorkingTime.php";

  if(isset($_POST)) {

    //I have to make a check for every post request value here
    for($i = 1; $i <= 7; $i++) {
      $day = new WorkingTime($i);
      if(!isset($_POST[$i . '_from'])) {
        $from = "Closed";
      } else {
        $from = $_POST[$i . '_from'];
      }

      if(!isset($_POST[$i . '_to'])) {
        $to = "Closed";
      } else {
        $to = $_POST[$i . '_to'];
      }

      $day->updateWorkingTime($from, $to);
      
    }

  }

?>
