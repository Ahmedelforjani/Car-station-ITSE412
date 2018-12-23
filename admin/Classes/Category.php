<?php

  include "../DB_Connect.php";

  class Category {

    private $_id, $_name, $_description, $_image;

    public function __construct($id) {
      //get the category data from the db
      $this->_id = $id;
      global $con;

      $query = "SELECT * FROM categories WHERE id = :id";
      $stmt = $con->prepare($query);

      $stmt->bindParam(":id", $id);

      $stmt->execute();

      if( $stmt->rowCount() > 0 ) {
        $result = $stmt->fetch();
        $this->_name = $result['name'];
        $this->_description = $result['description'];
        $this->_image = $result['img'];
      }

    }

    public function getCategoryId() {
      return $this->_id;
    }

    public function getCategoryName() {
      return $this->_name;
    }

  }


  class CategoriesManager {

    private $_categories = array();

    public function getCategoriesHTMLTable() {

      $table = "";
      foreach($this->_categories as $category){
        $table .= '<tr data-id="'.$category->getCategoryId().'">
                <td>'.$category->getCategoryName().'</td>
                </tr>';
      }

      return $table;
    }

    public function loadAllCategories() {
      global $con;

      $query = "SELECT id FROM categories";
      $stmt = $con->prepare($query);

      $stmt->execute();

      if( $stmt->rowCount() > 0 ) {
        $result = $stmt->fetchAll();
        $this->_categories = array();

        foreach ($result as $row) {
          $this->_categories[] = new Category($row['id']);
        }
      }
    }

    public function addNewCategory($category) {
      global $con;

      $query = "INSERT INTO categories(name, img, description) VALUES(:cat_name, :cat_img, :cat_desc)";

      $stmt = $con->prepare($query);
      $stmt->bindParam(':cat_name', $category['name']);
      $stmt->bindParam(':cat_img', $category['image']);
      $stmt->bindParam(':cat_desc', $category['description']);

      try{
        if($stmt->execute()) {
          return "success";
        } else {
          return "failed";
        }
      } catch(Exception $ex) {
        return "failed";
      }
    }

    public function updateCategory($category) {
      global $con;

      if(isset($category['image'])) {
        $query = "UPDATE categories SET name = :cat_name, img = :cat_img, description = :cat_desc WHERE id = :id";
      } else {
        $query = "UPDATE categories SET name = :cat_name, description = :cat_desc WHERE id = :id";
      }


      $stmt = $con->prepare($query);
      $stmt->bindParam(':cat_name', $category['name']);
      if(isset($category['image'])) {
        $stmt->bindParam(':cat_img', $category['image']);
      }

      $stmt->bindParam(':cat_desc', $category['description']);
      $stmt->bindParam(':id', $category['id']);

      try{
        if($stmt->execute()) {
          return "success";
        } else {
          return "failed";
        }
      } catch(Exception $ex) {
        return "failed";
      }

    }

    public function deleteCategory($cat_id) {
      global $con;

      $query = "DELETE FROM categories WHERE id = :id";
      $stmt = $con->prepare($query);
      $stmt->bindParam(':id', $cat_id);

      try{
        $stmt->execute();
        if($stmt->rowCount() > 0) {
          return "success";
        } else {
          return "failed";
        }
      } catch(Exception $ex) {
        return "failed";
      }


    }

    public function getAllCategories() {
      return $categories;
    }
  }

?>
