<?php

  //check if i got post request
  if(isset($_POST)) {

    if(isset($_POST['field_type'])) {
      //check the value of field_type
      switch($_POST['field_type']) {
        case 'update_welcome_message' :
          echo 'welcome_message';
          $welcome_message = $_POST['welcome_message'];

          //execute code to update the values
          /*

          */
          break;
        case 'update_recent_vehicles_message' :
          echo 'update_recent_vehicles_message';
          $recent_vehicles_message = $_POST['recent_vehicles_message'];

          //execute code to update the values
          /*

          */
          break;
        case 'update_statistics' :
          echo 'update_statistics';
          $cars_sold =  $_POST['cars_sold'];
          $amount_sold =  $_POST['amount_sold'];
          $customer_satisfaction =  $_POST['customer_satisfaction'];
          $oil_changes =  $_POST['oil_changes'];

          //execute code to update the values
          /*

          */

          break;

          case 'update_about_us_message' :
            echo 'update_about_us_message';
            $about_us_message = $_POST['about_us_message'];

            //execute code to update the values
            /*

            */

            break;

          case 'update_info' :
            echo 'update_info';
            $phone =  $_POST['phone'];
            $email =  $_POST['email'];
            $address =  $_POST['address'];
            $map_loc =  $_POST['map_loc'];

            //execute code to update the values
            /*

            */

            break;

        default:
          echo 'nothing';

      }
    }

  }
?>
