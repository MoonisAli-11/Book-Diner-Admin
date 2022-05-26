<?php

include('connection.php');

if(isset($_GET['user_id'])){

    $user_id = $_GET['user_id'];

    $stmt = $conn->prepare("DELETE FROM user WHERE id=? LIMIT 1");

    $stmt->bind_param("i",$user_id);

    if($stmt->execute()){
        header("location: user.php?success_message=User was deleted successfully");
    }
    else{
        header("location: user.php?error_message=Error, User was not deleted");
    }

}else{
        header("location: user.php?error_message=Error, No user id was given");
    }

?>