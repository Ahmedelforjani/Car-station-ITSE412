<?php

  include "DB_Connect.php";

  class Car {

    private 
    $_id,
    $_name, 
    $_model, 
    $_color,
    $_milage,
    $_engine,
    $_doors,
    $_category_id,
    $_category_name,
    $_condition,
    $_passengers,
    $_price,
    $_transmission,
    $_overview,
    $_options;


    public function __construct($id) {
      //get the Car data from the db
      $this->_id = $id;
      global $con;

      $query = "SELECT * FROM car INNER JOIN categories ON category_id = categories.id WHERE car_id = :id";
      $stmt = $con->prepare($query);

      $stmt->bindParam(":id", $id);

      $stmt->execute();

      if( $stmt->rowCount() > 0 ) {
        $result = $stmt->fetch();
        $this->_name = $result['car_name'];
        $this->_model = $result['model'];
        $this->_color = $result['color'];
        $this->_milage = $result['milage'];
        $this->_engine = $result['engine'];
        $this->_doors = $result['doors'];
        $this->_category_id = $result['category_id'];
        $this->_category_name = $result['name'];
        $this->_condition = $result['condition'];
        $this->_passengers = $result['passengers'];
        $this->_price = $result['price'];
        $this->_transmission = $result['transmission'];
        $this->_overview = $result['overview'];
        $this->_options = $result['options'];
        
      } else {
        $this->_name = 'not found';
      }
    }

    public function getId() {
      return $this->_id;
    }

    public function getName() {
      return $this->_name;
    }

    public function getColor() {
      return $this->_color;
    }

    public function getModel() {
      return $this->_model;
    }

    public function getMilage() {
      return $this->_milage;
    }

    public function getEngine() {
      return $this->_engine;
    }

    public function getDoors() {
      return $this->_doors;
    }

    public function getCategoryId(){
      return $this->_category_id;
    }

    public function getCategoryName() {
      return $this->_category_name;
    }

    public function getCondition() {
      return $this->_condition;
    }

    public function getPassengers() {
      return $this->_passengers;
    }

    public function getPrice() {
      return $this->_price;
    }

    public function getTransmission(){
      return $this->_transmission;
    }

    public function getOverview(){
      return $this->_overview;
    }

    public function getOptions(){
      return $this->_options;
    }

    public function getNext(){
      global $con;

      $query = "SELECT car_id FROM car WHERE car_id < :id ORDER BY car_id DESC LIMIT 1";
      $stmt = $con->prepare($query);

      $stmt->bindParam(":id", $this->_id);

      $stmt->execute();

      if( $stmt->rowCount() > 0 ) {
        $result = $stmt->fetch();
        return $result['car_id'];
      } else {
        return 0;
      }

    }

    public function getPrev(){
      global $con;

      $query = "SELECT car_id FROM car WHERE car_id > :id ORDER BY car_id ASC LIMIT 1";
      $stmt = $con->prepare($query);

      $stmt->bindParam(":id", $this->_id);

      $stmt->execute();

      if( $stmt->rowCount() > 0 ) {
        $result = $stmt->fetch();
        return $result['car_id'];
      } else {
        return 0;
      }
    }

    public function getImages() {
      global $con;
      $images = array();

      $query = "SELECT * FROM cars_image WHERE car_id = :car_id";
      $stmt = $con->prepare($query);
  
      $stmt->bindParam(":car_id", $this->_id);

      $stmt->execute();
      if( $stmt->rowCount() > 0 ) {
          $result = $stmt->fetchAll();
          foreach ($result as $row) {
            $images[] = $row['img'];
          }
      } else { 
        $images[] = 'car-defualt.jpg';
      }

      return $images;
    }

  }


  class CarsManager {

    private $_Cars = array();

    public function getCarsHTMLTable() {

      $table = "";
      foreach($this->_Cars as $Car){
        $table .= '<tr data-id="'.$Car->getId().'">
                <td>'.$Car->getName().'</td>
                <td>'.$Car->getModel().'</td>
                <td>'.$Car->getColor().'</td>
                <td>'.$Car->getEngine().'</td>
                <td>'.$Car->getCategoryName().'</td>
                <td>'.$Car->getCondition().'</td>
                <td>'.$Car->getPrice().'</td>
                <td>
                  <a href="editcar.php?carid='.$Car->getId().'" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="Edit">
                        <i class="la la-edit"></i>
                  </a>
                  <Button id=imagerViewer data-toggle="modal" data-target="#viewImages" data-id='.$Car->getId().' class="btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill viewer" title="View Car\'s Images">
                        <i class="la la-photo"></i>
                  </Button> 
                </td>
                </tr>';
      }
      return $table;
    }

    public function loadAllCars() {
      global $con;

      $query = "SELECT car_id FROM car";
      $stmt = $con->prepare($query);

      $stmt->execute();

      if( $stmt->rowCount() > 0 ) {
        $result = $stmt->fetchAll();
        $this->_Cars = array();

        foreach ($result as $row) {
          $this->_Cars[] = new Car($row['car_id']);
        }
      }
    }

    public function addNewCar($car) {
      global $con;

      $query = "INSERT INTO car (car_name, model, color, milage, `engine`, doors, category_id, `condition`, passengers, 
      price, transmission, overview, options) VALUES (:car_name, :model, :color, :milage, :engine, :doors, 
      :category_id, :condition, :passengers, :price, :transmission, :overview, :options)";

      $stmt = $con->prepare($query);
      $stmt->bindParam(':car_name', $car['name']);
      $stmt->bindParam(':model', $car['model']);
      $stmt->bindParam(':color', $car['color']);
      $stmt->bindParam(':milage', $car['milage']);
      $stmt->bindParam(':engine', $car['engine']);
      $stmt->bindParam(':doors', $car['doors']);
      $stmt->bindParam(':category_id', $car['category_id']);
      $stmt->bindParam(':condition', $car['condition']);
      $stmt->bindParam(':passengers', $car['passengers']);
      $stmt->bindParam(':price', $car['price']);
      $stmt->bindParam(':transmission', $car['transmission']);
      $stmt->bindParam(':overview', $car['overview']);
      $stmt->bindParam(':options', $car['options']);

      try{
        if($stmt->execute()) {
          return "success";
        } else {
          return "failed";
        }
      } catch(Exception $ex) {
        return "Error ".$ex;
      }
    }

    public function updateCar($car) {
      global $con;

      $query = "UPDATE car SET car_name = :car_name, model = :model, color = :color, milage = :milage, 
                `engine` = :engine, doors = :doors, category_id = :category_id, `condition` = :condition,
                passengers = :passengers, price = :price, transmission = :transmission, overview = :overview, 
                options = :options WHERE car_id = :id";

      $stmt = $con->prepare($query);
      $stmt->bindParam(':car_name', $car['name']);
      $stmt->bindParam(':model', $car['model']);
      $stmt->bindParam(':color', $car['color']);
      $stmt->bindParam(':milage', $car['milage']);
      $stmt->bindParam(':engine', $car['engine']);
      $stmt->bindParam(':doors', $car['doors']);
      $stmt->bindParam(':category_id', $car['category_id']);
      $stmt->bindParam(':condition', $car['condition']);
      $stmt->bindParam(':passengers', $car['passengers']);
      $stmt->bindParam(':price', $car['price']);
      $stmt->bindParam(':transmission', $car['transmission']);
      $stmt->bindParam(':overview', $car['overview']);
      $stmt->bindParam(':options', $car['options']);
      $stmt->bindparam(':id', $car['id']);

      try{
        if($stmt->execute()) {
          return "success";
        } else {
          return "failed";
        }
      } catch(Exception $ex) {
        return "Error ".$ex;
      }

    }

    public function deleteCar($car_id) {
      global $con;

      $query = "DELETE FROM car WHERE car_id = :id";
      $stmt = $con->prepare($query);
      $stmt->bindParam(':id', $car_id);

      try{
        $stmt->execute();
        if($stmt->rowCount() > 0) {
          return "success";
        } else {
          return "failed";
        }
      } catch(Exception $ex) {
        return "Error ".$ex;
      }
    }

    public function addImage($id, $image) {
      global $con;

      $query = "INSERT INTO cars_image (car_id, img) VALUES (:id, :img)";
      $stmt = $con->prepare($query);
      $stmt->bindParam(':id', $id);
      $stmt->bindParam(':img', $image);

      try{
        $stmt->execute();
        if($stmt->rowCount() > 0) {
          return "success";
        } else {
          return "failed";
        }
      } catch(Exception $ex) {
        return "Error ".$ex;
      }

    }

    public function deleteImage($id, $image) {
      global $con;
      $query = "DELETE FROM cars_image WHERE car_id = :id AND img = :img";
      $stmt = $con->prepare($query);
      $stmt->bindParam(':id', $id);
      $stmt->bindParam(':img', $image);

      try{
        $stmt->execute();
        if($stmt->rowCount() > 0) {
          return "success";
        } else {
          return "failed";
        }
      } catch(Exception $ex) {
        return "Error ".$ex;
      }
    }

    public function getAllCars() {
      return $this->_Cars;
    }

    public function getCount($query) {
      global $con;
      $stmt = $con->prepare($query);
      $stmt->execute();
      return $stmt->rowCount();
   }
  }

  

?>
