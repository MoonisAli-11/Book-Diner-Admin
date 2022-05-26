<?php

include('connection.php');

$id=$_GET['id'];
$status=$_GET['status'];

$q="update partner set status=$status where id=$id";

mysqli_query($conn,$q);

header('location:partner.php');

?>


