<?php
  include "../DB_Connect.php";
  //check if i got post request
  if(isset($_POST)) {

    if(isset($_POST['field_type'])) {
      //check the value of field_type
      switch($_POST['field_type']) {
        case 'update_welcome_message' :
          echo 'welcome_message';
          $welcome_message = $_POST['welcome_message'];
          //execute code to update the values

          $queryy = "UPDATE `paragraphs` SET `text` = :welcome WHERE `paragraphs`.`id` = 1";

          $sqll = $con->prepare($queryy);
          $sqll->bindParam(':welcome', $welcome_message);
          $sqll->execute();
          
          break;
        case 'update_recent_vehicles_message' :
          echo 'update_recent_vehicles_message';
          $recent_vehicles_message = $_POST['recent_vehicles_message'];

          //execute code to update the values

          $queryy = "UPDATE `paragraphs` SET `text` = :recent WHERE `paragraphs`.`id` = 2";
          $sqll = $con->prepare($queryy);
          $sqll->bindParam(':recent',  $recent_vehicles_message);
          $sqll->execute();

          break;
        case 'update_statistics' :
          echo 'update_statistics';
          $cars_sold =  $_POST['cars_sold'];
          $amount_sold =  $_POST['amount_sold'];
          $customer_satisfaction =  $_POST['customer_satisfaction'];
          $oil_changes =  $_POST['oil_changes'];

          //execute code to update the values

          $queryy = "UPDATE `hp_statistics` SET `cars` = :cars, `amount` = :amount, `satisfaction` = :satisfaction, `changes` = :oil WHERE `hp_statistics`.`id` = 0";
          $sqll = $con->prepare($queryy);
          $sqll->bindParam(':cars',  $cars_sold);
          $sqll->bindParam(':amount',  $amount_sold);
          $sqll->bindParam(':satisfaction',  $customer_satisfaction);
          $sqll->bindParam(':oil',  $oil_changes);
          $sqll->execute();

          break;

          case 'update_about_us_message' :
            echo 'update_about_us_message';
            $about_us_message = $_POST['about_us_message'];

            //execute code to update the values
            $queryy = "UPDATE `paragraphs` SET `text` = :about WHERE `paragraphs`.`id` = 3";
            $sqll = $con->prepare($queryy);
            $sqll->bindParam(':about',  $about_us_message);
            $sqll->execute();

            break;

          case 'update_info' :
            echo 'update_info';
                $phone =  $_POST['phone'];
                $email =    $_POST['email'];
                $address =  $_POST['address'];
                $map_loc =  $_POST['map_loc'];

            //execute code to update the values
            $queryy = "UPDATE `webside_info` SET `email` = :email, `phone` = :phone, `address` = :addresss , `map_loc` = :map_loc WHERE `webside_info`.`id` = 1";
            $sqll = $con->prepare($queryy);
            $sqll->bindParam(':phone',  $phone);
            $sqll->bindParam(':email',  $email);
            $sqll->bindParam(':addresss',  $address);
            $sqll->bindParam(':map_loc',  $map_loc);
            $sqll->execute();

            break;

        default:
          echo 'nothing';

      }
    }

  }
?>
