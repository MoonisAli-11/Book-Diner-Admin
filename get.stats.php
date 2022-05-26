<?php

include('connection.php');


$stmt1 = $conn->prepare("select count(*) as total_users from user");
$stmt1->execute();
$stmt1->bind_result($total_users);
$stmt1->store_result();
$stmt1->fetch();


$stmt2 = $conn->prepare("select count(*) as total_products from product");
$stmt2->execute();
$stmt2->bind_result($total_products);
$stmt2->store_result();
$stmt2->fetch();


$stmt3 = $conn->prepare("select sum(quantity) as total_quantity from orders");
$stmt3->execute();
$stmt3->bind_result($total_quantity);
$stmt3->store_result();
$stmt3->fetch();


$stmt4 = $conn->prepare("select sum(total) as total_money from orders");
$stmt4->execute();
$stmt4->bind_result($total_money);
$stmt4->store_result();
$stmt4->fetch();


$stmt5 = $conn->prepare("select count(*) as total_orders from orders");
$stmt5->execute();
$stmt5->bind_result($total_orders);
$stmt5->store_result();
$stmt5->fetch();


$stmt6 = $conn->prepare("select count(*) as total_cities from city");
$stmt6->execute();
$stmt6->bind_result($total_cities);
$stmt6->store_result();
$stmt6->fetch();


$stmt7 = $conn->prepare("select count(*) as total_partners from partner");
$stmt7->execute();
$stmt7->bind_result($total_partners);
$stmt7->store_result();
$stmt7->fetch();


$stmt8 = $conn->prepare("select count(*) as total_categories from category");
$stmt8->execute();
$stmt8->bind_result($total_categories);
$stmt8->store_result();
$stmt8->fetch();


?>