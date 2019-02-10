<?php 
   
include "Classes/Car.php";

$response = array(
     "status" => "failed"
);

if($_POST){
   
     $name = $_POST['name'];
     $model = $_POST['model'];
     $color = $_POST['color'];
     $milage = $_POST['milage'];
     $engine = $_POST['engine'];
     $doors = $_POST['doors'];
     $category_id = $_POST['category_id'];
     $condition = $_POST['condition'];
     $passengers = $_POST['passengers'];
     $price = $_POST['price'];
     $transmission = $_POST['transmission'];
     $overview = $_POST['overview'];
     $options = $_POST['options'];

     $cars_manager = new CarsManager();

     $car = array(
          'name' => $name,
          'model' => $model,
          'color' => $color,
          'milage' => $milage,
          'engine' => $engine,
          'doors' => $doors,
          'category_id' => $category_id,
          'condition' => $condition,
          'passengers' => $passengers,
          'price' => $price,
          'transmission' => $transmission,
          'overview' => $overview,
          'options' => $options
     );

     $response['status'] = $cars_manager->addNewCar($car);
     $id = $con->lastInsertId();
     if ($_FILES && $response['status'] == 'success'){
          try {
               $images = reArrayFiles($_FILES['image']);
               foreach($images as $image){
                    $imageName = rand(0, 100000) . "_" . str_replace(" ", "_", $id) . ".png";
                    move_uploaded_file($image['tmp_name'], 'images/car-images/'.$imageName);
                    $cars_manager->addImage($id, $imageName);
               }
          } catch (Exception $e){
               $response['status'] = "".$e;
          }
     }

     $response['status'] = "success";
}

function reArrayFiles($file) {
    $file_ary = array();
    $file_count = count($file['name']);
    $file_key = array_keys($file);
   
    for($i=0;$i<$file_count;$i++)
    {
        foreach($file_key as $val)
        {
            $file_ary[$i][$val] = $file[$val][$i];
        }
    }
    return $file_ary;
}

// function sendEmails($id){
//      global $con; 
//      $query = "SELECT * FROM subscribed_users";
//      try {
//      $stmt = $con->prepare($query);
//      $stmt->execute();
//      $Message =  "Hello Dear customer we have been added a new car please check it out www.carstation.com/car.php?id=".$id;
//      if( $stmt->rowCount() > 0 ) {
//           $result = $stmt->fetchAll();
//           foreach ($result as $row) {
//                $user_Email = "car@station.com";
//                $headers = 'From: '.$user_Email.'' . "rn" .
//                'Reply-To: '.$user_Email.'' . "rn" .
//                'X-Mailer: PHP/' . phpversion();
//                @mail($row['email'], "We have added new car", $Message, $headers);
//           }
//      }
//      } catch(Exception $ex){
//           echo $response['error'] = $ex;
//      }
// }

echo json_encode($response);

?>
