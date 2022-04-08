<?php
session_start();
include("include/connection.php");
if (isset($_POST['login'])) {
$uname = $_POST['uname']; $pass = $_POST['pass'];
if (empty($uname)) {
        echo "<script>alert('Enter Username')</script>"; 
    }else if (empty($pass)) {
        echo "<script>alert( "Enter Password")</script>";
    }else{
        $query = "SELECT * FROM patient WHERE username='$uname' AND password='$pass'"; 
        $res = mysqli_query($connect, $query);
        if (mysqli_num_rows($res)==1) { 
            header("Location:patient/index.php"); 
            $_SESSION['patient/index.php']
        }else{ 
        echo "<script>alert('Invailed Account')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Login Page</title>
</head>
<body style=" background-image: url(img/bg.jpg); background-repect: no-repect; background-size: cover;" >
    <?php
    include("include/header.php");
    ?>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 my-5 jumbotron">
                    <h5 class="text-center">Patient Login</h5>
                    <form method="post" action="">
                        <div class="from-group">
                            <label for="">Username</label>
                            <input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter username">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="text" class="form-control" autocomplete="off" placeholder="Enter Password">
                        </div>
                        <input type="text" class="btn btn-info my-3" value="Login">
                        <p>I don't have an account <a href="#">Click here</a> </p>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</body>
</html>