<?php

include('connection.php');

if(isset($_POST['update_payment_btn'])){

    $ppayment_id = $_POST['payment_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $attribute = $_POST['attribute'];
    $status = $_POST['status'];

    $image = $_FILES['image']['tmp_name'];

    $image_name = strval($payment_id). strval(time()).".jpeg";

    move_uploaded_file($image,"assets/img/".$image_name);



    $stmt = $conn->prepare("UPDATE payment SET name=?, description=?, image=?, attribute=?, status=?,
                            WHERE id=?");

    $stmt->bind_param("sssssi",$title,$description,$image_name,$attribute,$status,$payment_id);

    if($stmt->execute()){
        header("location: payment.php?success_message=payment was updated successfully");
    }
    else{
        header("location: payment.php?error_message=Error, payment was not updated");
    }

}else{
    header("location: payment.php?error_message=Error, Try again");
}



?>