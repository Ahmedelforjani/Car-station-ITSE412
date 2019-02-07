<?php 

    include '../DB_Connect.php';
    
    $response = array(
        "message" => "failed"
    );

    if(isset($_POST['username']) && isset($_POST['password'])){
        $user = $_POST['username'];
        $hashedPassword = sha1($_POST['password']);

        global $con;
        $query = "SELECT * FROM user WHERE `name` = :username AND `password` = :password";
        $stmt = $con->prepare($query);
        $stmt->bindParam(':username', $user);
        $stmt->bindParam(':password', $hashedPassword);
  
        $stmt->execute();
        if($stmt->rowCount() > 0) {
            session_start();
            $row = $stmt->fetch();
            $_SESSION['user'] = $row['name'];
            $response['message'] = "success";
        } else {
            $response['message'] = "failed";
        }
        
    }

    echo json_encode($response);


?>