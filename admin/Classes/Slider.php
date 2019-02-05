<?php

  include "DB_Connect.php";
  
  class Slider {
    private $_id, $_img;

    public function __construct($id) {
      //get the category data from the db
      $this->_id = $id;
      global $con;

      $query = "SELECT * FROM slide WHERE id = :id";
      $stmt = $con->prepare($query);

      $stmt->bindParam(":id", $id);

      $stmt->execute();

      if( $stmt->rowCount() > 0 ) {
        $result = $stmt->fetch();
        $this->_img = $result['img'];
      }

    }

    public function getSliderImageId() {
      return $this->_id;
    }

    public function getSliderImage() {
      return $this->_img;
    }
  }

  class SliderManager {
    private $_images = array();

    public function loadAllImages() {
      global $con;

      $query = "SELECT id FROM slide";
      $stmt = $con->prepare($query);

      $stmt->execute();

      if( $stmt->rowCount() > 0 ) {
        $result = $stmt->fetchAll();
        $this->_images = array();

        foreach ($result as $row) {
          $this->_images[] = new Slider($row['id']);
        }
      }
    }

    public function getAllImages() {
      return $this->_images;
    }

  }


?>
