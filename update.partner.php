<?php

include('connection.php');

if(isset($_POST['update_partner_btn'])){

    $ppartner_id = $_POST['partner_id'];
    $title = $_POST['title'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $commission = $_POST['commission'];
    $partner_product = $_POST['partner_product'];
    $seat = $_POST['seat'];
    $status = $_POST['status'];



    $stmt = $conn->prepare("UPDATE partner SET name=?, email=?, mobile=?, address=?, commission=?, partner_product=?, seat=?, status=?,
                            WHERE id=?");

    $stmt->bind_param("ssisssiii",$title,$email,$mobile,$address,$commission,$partner_product,$seat,$status,$partner_id);

    if($stmt->execute()){
        header("location: partner.php?success_message=Partner was updated successfully");
    }
    else{
        header("location: partner.php?error_message=Error, Partner was not updated");
    }

}else{
    header("location: partner.php?error_message=Error, Try again");
}



?>