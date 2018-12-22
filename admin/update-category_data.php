<?php

  include "Classes/Category.php";

  $status = array(
    "message" => "failed"
  );

  //check if i got the post request
  if(isset($_POST['category_name']) && isset($_POST['category_description']) && isset($_FILES['category_image']) ) {


    //connect to the database
    include "../DB_Connect.php";

    $category_name        = $_POST['category_name'];
    $category_description = $_POST['category_description'];
    $category_id          = $_POST['cat_id'];
    if(!empty($_FILES['category_image']['name'])) {
      $category_image       = $_FILES['category_image'];
      //generate image name
      $imageName = rand(0, 100000) . "_" . str_replace(" ", "_", $category_name) . ".png";
      move_uploaded_file($category_image['tmp_name'], "images/" . $imageName);
    }



    $category_manager = new CategoriesManager();

    $category = array(
      "name" => $category_name,
      "description" => $category_description,
      "id" => $category_id
    );

    if(!empty($_FILES['category_image']['name'])) {
      $category['image'] = $imageName;
    }
    $status['message'] = $category_manager->updateCategory($category);

  }

  echo json_encode($status);


?>
