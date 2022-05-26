<?php

include('connection.php');

if(isset($_POST['add_product_btn'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $branch = $_POST['branch'];
    $status = $_POST['status'];

    $image = $_FILES['image']['tmp_name'];
    $image_name = $title . ".jpeg";
    move_uploaded_file($image,"assets/img/".$image_name);




    $stmt = $conn->prepare("INSERT INTO product (name,description,category,branch,status,image)
                            VALUES (?,?,?,?,?,?)");
    $stmt->bind_param("ssssss",$title,$description,$category,$branch,$status,$image_name);

    if($stmt->execute()){
        header("location: products.php?success_message=Product was created successfully");
    }
    else{
        header("location: products.php?error_message=Error, Product was not created");
    }
    
}else{
    header("location: products.php?error_message=Error, try again");
    }

?>