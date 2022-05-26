<?php

include('connection.php');

if(isset($_GET['partner_id'])){

    $partner_id = $_GET['partner_id'];

    $stmt = $conn->prepare("DELETE FROM partner WHERE id=? LIMIT 1");

    $stmt->bind_param("i",$partner_id);

    if($stmt->execute()){
        header("location: partner.php?success_message=Partner was deleted successfully");
    }
    else{
        header("location: partner.php?error_message=Error, Partner was not deleted");
    }

}else{
        header("location: partner.php?error_message=Error, No Partner id was given");
    }

?>