<?php

  include "Classes/WorkingTime.php";

  if(isset($_POST)) {

    $response = array(
      "from" => "",
      "to"  => ""
    );
    $time = new WorkingTime($_POST['id']);
    $response["from"] = $time->getStartHour();
    $response["to"] = $time->getCloseHour();

    echo json_encode($response);
  }
?>
