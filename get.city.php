<?php

include('connection.php');

//determine page no
if(isset($_GET['page_no']) && $_GET['page_no'] != ""){
    $page_no = $_GET['page_no'];

}
else{
    $page_no = 1;
}

//return no of cities
$stmt1 = $conn->prepare("select count(*) as total_cities from city");
$stmt1->execute();
$stmt1->bind_result($total_cities);
$stmt1->store_result();
$stmt1->fetch();

//cities per page
$total_cities_per_page = 5;

$offset = ($page_no-1) * $total_cities_per_page;

$total_no_of_pages = ceil($total_cities/$total_cities_per_page);

//get cities

$stmt2 = $conn->prepare("select * from city limit $offset,$total_cities_per_page");
$stmt2->execute();
$cities = $stmt2->get_result();


?>