<?php

include('connection.php');

if(isset($_GET['product_id'])){

    $product_id = $_GET['product_id'];

    $stmt = $conn->prepare("DELETE FROM product WHERE id=? LIMIT 1");

    $stmt->bind_param("i",$product_id);

    if($stmt->execute()){
        header("location: products.php?success_message=Product was deleted successfully");
    }
    else{
        header("location: products.php?error_message=Error, Product was not deleted");
    }

}else{
        header("location: products.php?error_message=Error, No product id was given");
    }

?>