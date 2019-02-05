<?php 
    include 'DB_Connect.php';

    $response = array(
        'message' => 'falied'
    );

    if(isset($_POST['email'])){
        $email = $_POST['email'];

        global $con;
        $query = 'INSERT INTO `subscribed_users`(email) VALUES (:email)';
        $stmt = $con->prepare($query);
        $stmt->bindParam(':email', $email);
        if($stmt->execute()){
            $response['message'] = 'success';
        }
    }


    echo json_encode($response);
    
?>