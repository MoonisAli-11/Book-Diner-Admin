<?php

include('connection.php');

//determine page no
if(isset($_GET['page_no']) && $_GET['page_no'] != ""){
    $page_no = $_GET['page_no'];

}
else{
    $page_no = 1;
}

//return no of users
$stmt1 = $conn->prepare("select count(*) as total_users from user");
$stmt1->execute();
$stmt1->bind_result($total_users);
$stmt1->store_result();
$stmt1->fetch();

//users per page
$total_users_per_page = 5;

$offset = ($page_no-1) * $total_users_per_page;

$total_no_of_pages = ceil($total_users/$total_users_per_page);

//get users

$stmt2 = $conn->prepare("select * from user limit $offset,$total_users_per_page");
$stmt2->execute();
$users = $stmt2->get_result();


?>