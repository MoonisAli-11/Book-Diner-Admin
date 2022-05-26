<?php

session_start();


//check if admin is not logged in
if(!isset($_SESSION['admin_logged_in'])){
    header("location: login.php");
    exit;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css"/>
    <link rel="stylesheet" href="assets/plugins/font/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
    
</head>
<body>

    

    <!--sidemenu-->
    <section id="menu">
        <div class="logo">
            <img src="assets/img/logo.jpeg"/>
            <h2>BOOK DINER</h2>
        </div>

        <div class="items">
            <li><i class="fa fa-tachometer" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
            <li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="city.php">Cities</a></li>
            <li><i class="fa fa-plus-circle" aria-hidden="true"></i><a href="add.city.php">Add Cities</a></li>
            <li><i class="fa fa-list-ul" aria-hidden="true"></i><a href="category.php">Category</a></li>
            <li><i class="fa fa-plus-circle" aria-hidden="true"></i><a href="add.category.php">Add Category</a></li>
            <li><i class="fa fa-product-hunt" aria-hidden="true"></i><a href="products.php">Products</a></li>
            <li><i class="fa fa-plus-circle" aria-hidden="true"></i><a href="add.product.php">Add Products</a></li>
            <li><i class="fa fa-users" aria-hidden="true"></i><a href="partner.php">Partners</a></li>
            <li><i class="fa fa-plus-circle" aria-hidden="true"></i><a href="add.partner.php">Add Partners</a></li>
            <li><i class="fa fa-line-chart" aria-hidden="true"></i><a href="order.php">Orders</a></li>
            <li><i class="fa fa-money" aria-hidden="true"></i><a href="payment.php">Payment Gateway</a></li>
            <li><i class="fa fa-users" aria-hidden="true"></i><a href="user.php">Users</a></li>
            <li><i class="fa fa-info-circle" aria-hidden="true"></i><a href="contact.php">Contact Us</a></li>
        </div>
    </section>