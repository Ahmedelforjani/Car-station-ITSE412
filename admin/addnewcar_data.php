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
   }

   echo json_encode($response);

?>
