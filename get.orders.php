<?php

include('connection.php');

//determine page no
if(isset($_GET['page_no']) && $_GET['page_no'] != ""){
    $page_no = $_GET['page_no'];

}
else{
    $page_no = 1;
}

//return no of products
$stmt1 = $conn->prepare("select count(*) as total_orders from orders");
$stmt1->execute();
$stmt1->bind_result($total_orders);
$stmt1->store_result();
$stmt1->fetch();

//products per page
$total_orders_per_page = 5;

$offset = ($page_no-1) * $total_orders_per_page;

$total_no_of_pages = ceil($total_orders/$total_orders_per_page);

//get products

$stmt2 = $conn->prepare("select * from orders limit $offset,$total_orders_per_page");
$stmt2->execute();
$orders = $stmt2->get_result();


?>