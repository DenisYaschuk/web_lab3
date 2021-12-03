<?php
include_once("common.php");
    if(isset($_POST['ajax'])){     
        
        $result = mysqli_query($conn, "INSERT INTO `acordion_data` (`unique_user_id`,`acordion_json`) VALUES 
        ('".mysqli_real_escape_string($conn,$_POST['unique_user_id'])."','".mysqli_real_escape_string($conn,$_POST['jsonResult'])."')") or die(mysqli_error($conn));
        

        echo json_encode(['error'=>0,'name'=>'success']);
    }
    else{
        echo json_encode(['error' => 1, 'name' => "Something went wrong."]);
    }
    
?>