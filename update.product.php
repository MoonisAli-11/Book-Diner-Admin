<?php

include('connection.php');

if(isset($_POST['update_product_btn'])){

    $product_id = $_POST['product_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $branch = $_POST['branch'];


    $stmt = $conn->prepare("UPDATE product SET name=?, description=?, category=?, branch=?,
                            WHERE id=?");

    $stmt->bind_param("ssssi",$title,$description,$category,$branch,$product_id);

    if($stmt->execute()){
        header("location: products.php?success_message=Product was updated successfully");
    }
    else{
        header("location: products.php?error_message=Error, Product was not updated");
    }

}else{
    header("location: products.php?error_message=Error, Try again");
}



?>