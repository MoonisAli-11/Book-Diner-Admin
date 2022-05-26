<?php

include('connection.php');

if(isset($_GET['city_id'])){

    $city_id = $_GET['city_id'];

    $stmt = $conn->prepare("DELETE FROM city WHERE id=? LIMIT 1");

    $stmt->bind_param("i",$city_id);

    if($stmt->execute()){
        header("location: city.php?success_message=City was deleted successfully");
    }
    else{
        header("location: city.php?error_message=Error, City was not deleted");
    }

}else{
        header("location: city.php?error_message=Error, No City id was given");
    }

?>