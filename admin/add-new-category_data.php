<?php

  include "Classes/Category.php";

  $status = array(
    "message" => "failed"
  );

  //check if i got the post request
  if(isset($_POST['name']) && isset($_POST['description']) && isset($_FILES['category_image']) && !empty($_FILES['category_image']['name'])) {


    //connect to the database
    include "../DB_Connect.php";

    $category_name        = $_POST['name'];
    $category_description = $_POST['description'];
    $category_image       = $_FILES['category_image'];

    //generate image name
    $imageName = rand(0, 100000) . "_" . str_replace(" ", "_", $category_name) . ".png";
    move_uploaded_file($category_image['tmp_name'], "images/" . $imageName);

    $category_manager = new CategoriesManager();
    $category = array(
      "name" => $category_name,
      "image" => $imageName,
      "description" => $category_description
    );
    $status['message'] = $category_manager->addNewCategory($category);
    global $con;
    $status['id'] = $con->lastInsertId();

  }

  echo json_encode($status);


?>
