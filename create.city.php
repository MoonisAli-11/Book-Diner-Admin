<?php

include('connection.php');

if(isset($_POST['add_city_btn'])){
    $title = $_POST['title'];
    $status = $_POST['status'];




    $stmt = $conn->prepare("INSERT INTO city (city_name,status)
                            VALUES (?,?)");
    $stmt->bind_param("ss",$title,$status);

    if($stmt->execute()){
        header("location: city.php?success_message=City was created successfully");
    }
    else{
        header("location: city.php?error_message=Error, City was not created");
    }
    
}else{
    header("location: city.php?error_message=Error, try again");
    }

?>