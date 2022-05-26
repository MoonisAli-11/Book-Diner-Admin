<?php include('includes/header.php'); ?>



    <!--interface-->
    <section id="interface">
        
    <?php include('includes/navigation.php'); ?>

        <!--title-->
        <h3 class="i-name">Admin Account</h3>


        <div class="container-fluid w-50 my-5">
            <p>Hello, <?php echo $_SESSION['admin_name']; ?></p>
            <p>Your Email: <?php echo $_SESSION['admin_email']; ?></p>
            <p><a href="logout.php">Logout</a></p>
        </div>
    </section>




<?php include('includes/script.php'); ?>