<?php

include('connection.php');

//determine page no
if(isset($_GET['page_no']) && $_GET['page_no'] != ""){
    $page_no = $_GET['page_no'];

}
else{
    $page_no = 1;
}

//return no of payments
$stmt1 = $conn->prepare("select count(*) as total_payments from payment");
$stmt1->execute();
$stmt1->bind_result($total_payments);
$stmt1->store_result();
$stmt1->fetch();

//payments per page
$total_payments_per_page = 5;

$offset = ($page_no-1) * $total_payments_per_page;

$total_no_of_pages = ceil($total_payments/$total_payments_per_page);

//get payments

$stmt2 = $conn->prepare("select * from payment limit $offset,$total_payments_per_page");
$stmt2->execute();
$payments = $stmt2->get_result();


?>