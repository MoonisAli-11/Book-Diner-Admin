<?php

session_start();


//check if admin is logged in
if(isset($_SESSION['admin_logged_in'])){
    header("location: index.php");
    exit;
}


include('connection.php');

if(isset($_POST['login_btn'])){

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $stmt = $conn->prepare("SELECT id,name,email,password from admin WHERE
                             email=? AND password=? limit 1");
    
    $stmt->bind_param("ss",$email,$password);
    
    if($stmt->execute()){
        $stmt->bind_result($id,$name,$email,$password);
        $stmt->store_result();

        if($stmt->num_rows() == 1){
            $stmt->fetch();

            //store admin info in session
            $_SESSION['admin_id'] = $id;
            $_SESSION['admin_email'] = $email;
            $_SESSION['admin_name'] = $name;
            $_SESSION['admin_logged_in'] = true;


            //send admin to dashboard       
            header("location: index.php?success_message=Login Successfully, Welcome Back");
        
        }else{
            header("location: login.php?error_message=Wrong Email/Password, Try Again");
        }
    }

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
    <link rel="stylesheet" href="assets/plugins/font/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style1.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-growl/1.0.0/jquery.bootstrap-growl.min.js" integrity="sha512-pBoUgBw+mK85IYWlMTSeBQ0Djx3u23anXFNQfBiIm2D8MbVT9lr+IxUccP8AMMQ6LCvgnlhUCK3ZCThaBCr8Ng==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>

    <!--messages-->
    <div class="text-center">
        <?php include('messages.php');?>
    </div>

    <div class="container-fluid">
        <div class="text-center">
            <img src="assets/img/logo.jpeg" class="avatar"/>
            <h3 class="mt-3">BOOK DINER</h3>
        </div>

       
        <form method="POST" action="login.php">
            <div class="form-group">
                <label>Email Id</label>
                <input type="email" class="form-control" placeholder="Enter Email Id" name="email" id="email"/>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter Password" name="password" id="password"/>
            </div>
            
            <div class="text">
                <input type="submit" class="btn btn-primary" value="Log In" name="login_btn" id="login_btn"/>
            </div>
        </form>
    </div>



    <script>
        $('#menu-btn').click(function(){
            $('#menu').toggleClass('active');
            $('[data-toggle="tooltip"]').tooltip();
            $('.dropdown-toggle').dropdown();
        })
        function hidediv()
        {
            document.getElementById("alert").style.visibility="hidden";
        }
        setTimeout("hidediv()",3000);
    </script>
    


</body>
</html>