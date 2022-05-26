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
$stmt1 = $conn->prepare("select count(*) as total_products from product");
$stmt1->execute();
$stmt1->bind_result($total_products);
$stmt1->store_result();
$stmt1->fetch();

//products per page
$total_products_per_page = 5;

$offset = ($page_no-1) * $total_products_per_page;

$total_no_of_pages = ceil($total_products/$total_products_per_page);

//get products

$stmt2 = $conn->prepare("select * from product limit $offset,$total_products_per_page");
$stmt2->execute();
$products = $stmt2->get_result();


?>