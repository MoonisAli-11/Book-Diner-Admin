<?php

session_start();

include('connection.php');

if(isset($_POST['add_category_btn'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $status = $_POST['status'];

    $image = $_FILES['image']['tmp_name'];
    $image_name = $title . ".jpeg";
    move_uploaded_file($image,"assets/img/".$image_name);




    $stmt = $conn->prepare("INSERT INTO category (cat_name,description,image,status)
                            VALUES (?,?,?,?)");
    $stmt->bind_param("ssss",$title,$description,$image_name,$status);

    if($stmt->execute()){
        header("location: category.php?success_message=Category was created successfully");
    }
    else{
        header("location: category.php?error_message=Error, Category was not created");
    }
    
}else{
    header("location: category.php?error_message=Error, try again");
    }

?>