<?php

include('connection.php');

//determine page no
if(isset($_GET['page_no']) && $_GET['page_no'] != ""){
    $page_no = $_GET['page_no'];

}
else{
    $page_no = 1;
}

//return no of partners
$stmt1 = $conn->prepare("select count(*) as total_partners from partner");
$stmt1->execute();
$stmt1->bind_result($total_partners);
$stmt1->store_result();
$stmt1->fetch();

//partners per page
$total_partners_per_page = 5;

$offset = ($page_no-1) * $total_partners_per_page;

$total_no_of_pages = ceil($total_partners/$total_partners_per_page);

//get partners

$stmt2 = $conn->prepare("select * from partner limit $offset,$total_partners_per_page");
$stmt2->execute();
$partners = $stmt2->get_result();


?>