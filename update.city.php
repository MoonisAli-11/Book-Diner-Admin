<?php

include('connection.php');

if(isset($_POST['update_city_btn'])){

    $pcity_id = $_POST['city_id'];
    $title = $_POST['title'];
    $status = $_POST['status'];



    $stmt = $conn->prepare("UPDATE city SET city_name=?, status=?,
                            WHERE id=?");

    $stmt->bind_param("ssi",$title,$status,$city_id);

    if($stmt->execute()){
        header("location: city.php?success_message=City was updated successfully");
    }
    else{
        header("location: city.php?error_message=Error, City was not updated");
    }

}else{
    header("location: city.php?error_message=Error, Try again");
}



?>