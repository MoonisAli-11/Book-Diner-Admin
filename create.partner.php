<?php

include('connection.php');

if(isset($_POST['add_partner_btn'])){
    $title = $_POST['title'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $commission = $_POST['commission'];
    $partner_product = $_POST['partner_product'];
    $seat = $_POST['seat'];
    $status = $_POST['status'];


    $stmt = $conn->prepare("INSERT INTO partner (name,email,mobile,address,commission,partner_product,seat,status)
                            VALUES (?,?,?,?,?,?,?,?)");

    $stmt->bind_param("ssisssii",$title,$email,$mobile,$address,$commission,$partner_product,$seat,$status);

    if($stmt->execute()){
        header("location: partner.php?success_message=Partner was created successfully");
    }
    else{
        header("location: partner.php?error_message=Error, Partner was not created");
    }
    
}else{
    header("location: partner.php?error_message=Error, try again");
    }

?>