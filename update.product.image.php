<?php

include('connection.php');

if(isset($_POST['update_product_image_btn'])){

    $product_id = $_POST['product_id'];
    $image = $_FILES['image']['tmp_name'];

    $image_name = strval($product_id). strval(time()).".jpeg";

    move_uploaded_file($image,"assets/img/".$image_name);


    $stmt = $conn->prepare("UPDATE product SET image=?   WHERE id=?");

    $stmt->bind_param("si",$image_name,$product_id);

    if($stmt->execute()){
        header("location: products.php?success_message=Product image was updated successfully");
    }
    else{
        header("location: products.php?error_message=Error, Product image was not updated");
    }

}else{
    header("location: products.php?error_message=Error, Try again");
}



?>