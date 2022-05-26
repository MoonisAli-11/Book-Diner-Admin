<?php

include('connection.php');

if(isset($_POST['update_category_btn'])){

    $pcategory_id = $_POST['category_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $status = $_POST['status'];



    $stmt = $conn->prepare("UPDATE category SET name=?, description=?, status=?,
                            WHERE id=?");

    $stmt->bind_param("sssi",$title,$description,$status,$category_id);

    if($stmt->execute()){
        header("location: category.php?success_message=Category was updated successfully");
    }
    else{
        header("location: category.php?error_message=Error, Category was not updated");
    }

}else{
    header("location: category.php?error_message=Error, Try again");
}



?>