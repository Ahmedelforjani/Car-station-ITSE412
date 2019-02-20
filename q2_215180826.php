<?php
	$dsn = 'mysql:host=localhost;dbname=itemsdb';
	$user = 'root';
	$pass = '';
	$option = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	);

	try {
		$con = new PDO($dsn, $user, $pass, $option);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	}

	catch(PDOException $e) {
		echo 'Failed To Connect' . $e->getMessage();
	}
if(isset($_POST['itemid'])){
    $itemid = $_POST['itemid'];
    $itemname = $_POST['itemname'];
    $itemprice = $_POST['itemprice'];
    $query = "INSERT INTO items (itemno,itemname,itemprice)
    VALUES (:itemid,:itemname,:itemprice)";
    
    $stmt = $con->prepare($query);
    $stmt->bindParam(':itemid', $itemid);
    $stmt->bindParam(':itemname', $itemname);
    $stmt->bindParam(':itemprice', $itemprice);
    $stmt->execute();
}


 ?>
<html>
<body>
    

<form action="q2_218215180826.php" method="post">
id <input type="text" name="itemid"><br>
name <input type="text" name="itemname"><br>
price <input type="text" name="itemprice"><br>
<BUtton type="submit">SAVE</BUtton>
</form>
</body>
</html>