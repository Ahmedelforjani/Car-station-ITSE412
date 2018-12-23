<?php

  include "Classes/Category.php";

  $status = array(
    "message" => "failed"
  );

  //check if i got the post request
  if(isset($_POST['cat_id'])) {


    //connect to the database
    include "../DB_Connect.php";

    $category_id = $_POST['cat_id'];

    $category_manager = new CategoriesManager();

    $status['message'] = $category_manager->deleteCategory($category_id);

  }

  echo json_encode($status);


?>
