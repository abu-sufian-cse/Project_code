<?php
include("include/connection.php");
if (isset($_POST['create'])){
    $fname = $_POST['fname'];
    $sname = $_POST['sname']; 
    $uname = $_POST['uname']; 
    $email = $_POST['email']; 
    $phone = $_POST['phone']; 
    $gender = $_POST['gender']; 
    $country = $_POST['country']; 
    $password = $_POST['pass']; 
    $con_pass = $_POST['con_pass'
        $error = array();
    if (empty($fname)) {
        $error['ac'] = "Enter Firstname"; }
    else if(empty($sname)) {
        $error['ac'] = "Enter Surname"; }   
    else if(empty($uname)) {
        $error['ac'] = "Enter Username"; }
    else if(empty($email)){
        $error['ac'] = "Enter Email" }
    else if(empty($phone)) {
        $error['ac'] = "Enter Phone Number";}
    else if($gender == ""){
    $error['ac'] = "Select Your Gender"; }
    else if($country == ""){
    $error['ac'] = "Select Your Country"; }
    else if(empty($password)){
    $error['ac'] = "Enter Password"; }
    else if($con_pass != $password) {
    $error['ac'] = "Both password do not match";}
    if (count($error)==0) {
        $query = "INSERT INTO patient(firstname, surname, username, email, phone, gender, ountry, password, date_reg, profile) VALUES('$fname', '$sname', '$uname', '$email',
        '$phone', '$gender', '$country', '$password', NOW(), 'patient.jpg')";
        $res = mysqli_query($connect, $query);
        if ($res) {
        header("Locatiob: patientlogin"); }else{
        echo "<script>alert('failed')</script>";
        }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Create Account</title> </head> <body style="background-image: url(img/back.jfif); background-repeat: no-repeat; background-size: cover;">
        <?php
            include("include/header.php");
        ?>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 my-2 jumbotron">
                        <h5 class="text-center text-info my-2">Create Account</h5>
                        <form method="post">
                            <div class="form-group">
                              <label>Firstname</label>
                                <input type="text" name="fname" class="form-control", autocomplete="off" placeholder="Enter Firstname">
                            </div>
                            <div class="form-group">
                              <label>Surname</label>
                                <input type="text" name="sname" class="form-control", autocomplete="off" placeholder="Enter Surname">
                            </div>
                            <div class="form-group">
                              <label>Username</label>
                                <input type="text" name="uname" class="form-control", autocomplete="off" placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                              <label>Email</label>
                                <input type="text" name="email" class="form-control", autocomplete="off" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                              <label>Phone</label>
                                <input type="text" name="number" class="form-control", autocomplete="off" placeholder="Enter Phon number">
                            </div>
                            <div class="form-group">
                                <label for="">Gender</label>
                                <select name="gender" Class="form-control">
                                    <option value="">Select Your Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Country</label>
                                <select name="country" Class="form-control">
                                    <option value="">Select Your country</option>
                                    <option value="USA">USA</option>
                                    <option value="Russia">Russia</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="pass" class="form-control" autocomplete="off" placeholder="Enter password">
                            </div>
                            <div class="form-group">
                                <label for="">Confirm Password</label>
                                <input type="password" name="pass" class="form-control" autocomplete="off" placeholder="Enter Confirm password">
                            </div>
                            <input type="submit" name="create" value="Create Account" class="btn btn-info my-3" value="Login">
                            <p>I don't have an account <a href="account.php">Click here</a> </p>

                        </form> </div>
    
</body>
</html>