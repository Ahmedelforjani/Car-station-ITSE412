<!DOCTYPE html>
<html>
<head>
  <title>final exam</title>
  <meta charset="utf-8">
</head>
<body>
  

      <center>
      <h2 style="color:#fff; font-size:50px; background-color:cadetblue; width:50%" >إضافة عنصر جديد</h2>
      <form method="POST" style="border: solid black 1px; margin:10px; width:30%;">
        <div class="form-group">
          <label for="itemid">رقم القطعة:</label>
          <input type="text" class="form-control" name="itemid"  placeholder="رقم العنصر" style="border: solid black 1px; margin:20px;">
        </div>
        <div class="form-group">
          <label for="itemname">اسم القطعة:</label>
          <input type="text" class="form-control" name="itemname" placeholder="إسم العنصر" style="border: solid black 1px; margin:20px;" >
        </div>
        <div class="form-group">
          <label for="itemprice">سعرالقطعة:</label>
          <input type="price" class="form-control" name="itemprice" id="price" placeholder="إدخل  السعر" style="border: solid black 1px; margin:20px;">
        </div>
          <input type="submit" class="btn btn-default" value="اضافة" style="width:150px ;height:35px; margin:20px;">

        <?php 

          
        
        include "dbconfig.php";

        $con;

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = $_POST['itemid'];
        $name = $_POST['itemname'];
        $price = $_POST['itemprice'];
        $query = $con->prepare( " INSERT INTO items SET itemno = ? , itemname = ? , itemprice = ? ;");
        $query->execute(array( $id , $name , $price )); }
      


          ?>

      </form>
   </center>
      </div>
      </div>
    </div>
  </div>
</body>
</html>
