<?php

include('connection.php');

if(isset($_GET['category_id'])){

    $category_id = $_GET['category_id'];

    $stmt = $conn->prepare("DELETE FROM category WHERE id=? LIMIT 1");

    $stmt->bind_param("i",$category_id);

    if($stmt->execute()){
        header("location: category.php?success_message=Category was deleted successfully");
    }
    else{
        header("location: category.php?error_message=Error, Category was not deleted");
    }

}else{
        header("location: category.php?error_message=Error, No category id was given");
    }

?>