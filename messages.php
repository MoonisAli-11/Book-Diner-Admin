<?php
     
    if(isset($_GET['success_message']))
    {
        echo "<div class='alert alert-success alert-dismissible' role='alert' id='alert'>".$_GET['success_message']."</div>";
    }

    if(isset($_GET['error_message']))
    {
        echo "<div class='alert alert-danger alert-dismissible' role='alert' id='alert'>".$_GET['error_message']."</div>";
    };
?>