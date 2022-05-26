<?php

include('connection.php');

//determine page no
if(isset($_GET['page_no']) && $_GET['page_no'] != ""){
    $page_no = $_GET['page_no'];

}
else{
    $page_no = 1;
}

//return no of categories
$stmt1 = $conn->prepare("select count(*) as total_categories from category");
$stmt1->execute();
$stmt1->bind_result($total_categories);
$stmt1->store_result();
$stmt1->fetch();

//categories per page
$total_categories_per_page = 5;

$offset = ($page_no-1) * $total_categories_per_page;

$total_no_of_pages = ceil($total_categories/$total_categories_per_page);

//get categories

$stmt2 = $conn->prepare("select * from category limit $offset,$total_categories_per_page");
$stmt2->execute();
$categories = $stmt2->get_result();


?>