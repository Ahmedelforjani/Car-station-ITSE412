<?php 
   
include "Classes/Car.php";

$response = array(
     "status" => "failed"
);

$cars_manager = new CarsManager();
$id = -1;

if(isset($_POST['car_id'])){
    $id = $_POST['car_id'];

    if(isset($_FILES['insert_images'])){

        try {
            $insertImages = reArrayFiles($_FILES['insert_images']);
            foreach($insertImages as $image){
                $imageName = rand(0, 100000) . "_" . rand(0, 100000) . ".png";
                move_uploaded_file($image['tmp_name'], 'images/car-images/'.$imageName);
                $cars_manager->addImage($id, $imageName);
            }
        } catch (Exception $e){
            $response['status'] = "".$e;
        }
        
    }

    if(isset($_POST['delete_images'])) {
        $deleteImages = $_POST['delete_images'];
        try {
            foreach($deleteImages as $image){
                $stat = $cars_manager->deleteImage($id, $image);
                if($stat == 'success'){
                    unlink('images/car-images/'.$image);
                }
            }
        } catch (Exception $e){
            $response['status'] = "".$e;
        }
    
    }
}

function reArrayFiles($file) {
    $file_ary = array();
    $file_count = count($file['name']);
    $file_key = array_keys($file);
   
    for($i=0;$i<$file_count;$i++)
    {
        foreach($file_key as $val)
        {
            $file_ary[$i][$val] = $file[$val][$i];
        }
    }
    return $file_ary;
}

$response['status'] = 'success';

echo json_encode($response);

?>
